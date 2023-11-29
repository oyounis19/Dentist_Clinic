<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;

class AppointmentController extends Controller
{
    public function reserve(AppointmentRequest $request)
    {
        if(!Auth::check())
            return redirect()->back()->with('error', 'You must be logged in to perform online booking.');

        // Combine the selected date and time into a single datetime string
        $dateTime = $request->date . ' ' . $request->time;

        // Check if the selected date and time are already booked for the doctor
        if (Appointment::where('date_time', $dateTime)
            ->where('doctor_id', $request->doctor_id)
            ->exists())
        {
            // Doctor is busy, create an error message
            $dayName = \Carbon\Carbon::parse($request->date)->format('l');
            $errorMessage = 'The doctor you selected is busy on ' . $dayName . ' at ' . $request->time;

            // Redirect back with the error message
            return redirect()->back()->with('error', $errorMessage);
        }

        // If the doctor is available, create a new appointment
        Appointment::create([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'date_time' => $dateTime,
        ]);

        // $this->notifyUser($request);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Appointment reserved, Check your mail.');
    }

    private function notifyUser(AppointmentRequest $request)
    {
        $patient = User::find($request->patient_id);
        $doctor = Doctor::find($request->doctor_id);

        $emailContent = "Dear {$patient->name},\n\n";
        $emailContent .= "Your appointment with Dr. {$doctor->name} is scheduled for {$request->date} at {$request->time}.\n";
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
}
