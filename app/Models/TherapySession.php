<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TherapySession extends Model
{
    /** @use HasFactory<\Database\Factories\TherapySessionFactory> */
    use HasFactory;

    protected $fillable = [
        'rehabilitation_plan_id',
        'session_date',
        'after_session_notes',
        'status',
    ];
}
