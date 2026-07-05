<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'pain_level',
        'mobility_level',
        'strength_level',
        'flexibility_level',
        'endurance_level',
        'balance_level',
        'remarks',
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function rehabilitationPlan()
    {
        return $this->hasOne(RehabilitationPlan::class);
    }
}