<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{
    /** @use HasFactory<\Database\Factories\TherapistFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialization_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

}
