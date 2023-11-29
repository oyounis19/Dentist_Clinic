<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'doctor_id' => 'required|numeric|exists:doctors,id',
            'patient_id' => 'required|numeric|exists:users,id',
            'date' => 'required|date|after_or_equal:today|before_or_equal:' . now()->addMonth()->toDateString(),
            // 'time' => [
            //     'required',
            //     // 'regex:/^(0[6-9]|1[0-9]|2[0-1]):(00|30)$/', // H:00 or H:30
            //     function ($attribute, $value, $fail) { // 6:00AM <= Time <= 10:00PM
            //         $selectedTime = \Carbon\Carbon::parse($value);
            //         $minTime = \Carbon\Carbon::parse('06:00');
            //         $maxTime = \Carbon\Carbon::parse('22:00');

            //         if ($selectedTime->lt($minTime) || $selectedTime->gt($maxTime)) {
            //             $fail('The time must be between 6:00 AM and 10:00 PM.');
            //         }
            //     },
            // ],
        ];
    }
}
