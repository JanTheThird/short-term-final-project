<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    /** @use HasFactory<\Database\Factories\TherapistFactory> */
    use HasFactory;

    protected $fillable = [
        'system_user_id',
        'specialization_id',
    ];
}
