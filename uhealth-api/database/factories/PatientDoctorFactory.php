<?php

namespace Database\Factories;

use App\Models\PatientDoctor;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientDoctorFactory extends Factory
{
    protected $model = PatientDoctor::class;

    public function definition()
    {
        return [
            'patient_id' => Patient::factory(),
            'doctor_id' => Doctor::factory(),
        ];
    }
}

