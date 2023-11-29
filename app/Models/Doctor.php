<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    /**
     * Get the appointments associated with the doctor.
     */
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }
}
