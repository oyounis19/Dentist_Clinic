<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;

class AppointmentController extends Controller
{
    public function reserve(AppointmentRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'You must be logged in to perform online booking.');
        }
        if (isset($request->payment_m) && $request->payment_m == 2 && !isset($request->paid)) {
            // Store the appointment details in the session
            session([
                'appointment' => [
                    'patient_id' => $request->patient_id,
                    'doctor_id' => $request->doctor_id,
                    'date' => $request->date,
                    'time' => $request->time,
                ]
            ]);

            // Redirect to the payment page
            return redirect()->route('payment.card');
        }

        // Combine the selected date and time into a single datetime string
        $dateTime = $request->date . ' ' . $request->time;

        // Check if the selected date and time are in the past
        if (strtotime($dateTime) < time()) {
            return redirect()->back()->with('error', 'Cannot book appointment in the past.');
        }

        // Check if the selected time is a multiple of 1 hour
        $minutes = date('i', strtotime($request->time));
        if ($minutes !== '00') {
            return redirect()->back()->with('error', 'Appointment time should be on the hour.');
        }

        // Check if the selected date and time are already booked for the doctor
        if (Appointment::where('date_time', $dateTime)
            ->where('doctor_id', $request->doctor_id)
            ->exists()) {
            // Doctor is busy, create an error message
            $dayName = \Carbon\Carbon::parse($request->date)->format('l');
            $errorMessage = 'The doctor you selected is busy on ' . $dayName . ' at ' . date('h:i A', strtotime($request->time));

            // Redirect back with the error message
            return redirect()->back()->with('error', $errorMessage);
        }

        // If the doctor is available, create a new appointment
        Appointment::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'date_time' => $dateTime,
        ]);

        $this->notifyUser($request);

        // Redirect back with a success message
        return redirect()->route('appointments', Auth::user()->id)->with('success', 'Appointment reserved, Check your email for details.');
    }
    private function notifyUser($request)
    {
        $patient = User::find($request['patient_id']);
        $doctor = Doctor::find($request['doctor_id']);

        $emailContent = "Dear {$patient->name},\n\n";
        $emailContent .= "Your appointment with Dr. {$doctor->name} is scheduled for {$request['date']} at {$request['time']}.\n";
        $emailContent .= "Thank you for choosing our services!\n\nBest regards,\nYour Dentist Clinic";

        // Send the email
        Mail::raw($emailContent, function ($message) use ($patient) {
            $message->to($patient->email)->subject('Appointment Confirmation');
        });
    }

    public function list($id){
        try{
            $id == Auth::user()->id ?: throw new \Exception();

            $user = User::findOrFail($id);
        }catch(\Exception $e){
            return redirect()->back();
        }
        return view('appointments', [
            'appointments' => $user->appointments()->with('doctor')->get(),
        ]);
    }

    public function cancel($id)
    {
        try {
            $appointment = Appointment::findOrFail($id);

            // Check if the appointment belongs to the logged in user
            $appointment->patient_id == Auth::user()->id ?: throw new \Exception();

            // Calculate the difference in hours between the current time and the appointment time
            $currentTime = now();
            $appointmentTime = $appointment->created_at;
            $hoursDifference = $currentTime->diffInHours($appointmentTime);

            // Check if it has been more than 24 hours since the appointment was booked
            if ($hoursDifference > 24) {
                return redirect()->back()->with('error', 'Cannot cancel appointment. It has been more than 24 hours since it was booked.');
            }

            $appointment->delete();
        } catch (\Exception $e) {
            return redirect()->back();
        }

        return redirect()->back()->with('success', 'Appointment cancelled. Your money will be refunded by the bank you paid with.');
    }
    public function showPaymentPage()
    {
        return view('payment');
    }

    public function pay(Request $request)
    {
        // Retrieve the appointment details from the session
        $appointmentDetails = session('appointment');

        if ($appointmentDetails) {
            // Create a new appointment
            $appointment = new Appointment();
            $appointment->patient_id = $appointmentDetails['patient_id'];
            $appointment->doctor_id = $appointmentDetails['doctor_id'];
            $appointment->date_time = $appointmentDetails['date'] . ' ' . $appointmentDetails['time'];
            $appointment->save();

            $this->notifyUser($appointmentDetails);
            // Clear the session
            $request->session()->forget('appointment');


            return redirect()->route('appointments', Auth::user()->id)->with('success', 'Appointment reserved, Check your email for details.');
        } else {
            return redirect()->back()->with('error', 'No appointment found in the session.');
        }
    }
}
