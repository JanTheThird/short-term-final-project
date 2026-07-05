<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medical_condition_id',
        'gender',
        'birthdate',
        'address',
        'emergency_contact',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicalCondition()
    {
        return $this->belongsTo(MedicalCondition::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}