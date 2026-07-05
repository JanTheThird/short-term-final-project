<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RehabilitationPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'assessment_id',
        'diagnosis',
        'goals',
        'treatment_plan',
        'start_date',
        'end_date',
        'status',
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function exercises()
    {
        return $this->belongsToMany(
            Exercise::class,
            'rehabilitation_plan_exercise'
        )->withPivot(
            'sets',
            'reps',
            'rest_period',
            'duration_minutes'
        )->withTimestamps();
    }

    public function therapySessions()
    {
        return $this->hasMany(TherapySession::class);
    }
}