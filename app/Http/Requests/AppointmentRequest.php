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
            'payment_m' => 'nullable|numeric|between:1,2',
            ];
    }
}
