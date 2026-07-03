<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

    protected $fillable = [
        'system_user_id',
        'medical_condition_id',
        'gender',
        'birthdate',
        'address',
        'emergency_contact'
    ];
}
