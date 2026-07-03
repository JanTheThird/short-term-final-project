<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    /** @use HasFactory<\Database\Factories\AssessmentFactory> */
    use HasFactory;

    protected $fillable = [
        'request_id',
        'pain_level',
        'mobility_level',
        'strength_level',
        'flexibility_level',
        'remarks'
    ];
}
