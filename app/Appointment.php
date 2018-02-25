<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['has_occured', 'patient_name', 'time_from', 'time_to', 'doctor_id'];
}
