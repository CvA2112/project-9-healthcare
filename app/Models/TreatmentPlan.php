<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreatmentPlan extends Model
{
    protected $fillable = [
        'doctor_id',
        'patient_id',
        'start_date',
        'end_date',
        'goals',
        'activities',
        'medications'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
