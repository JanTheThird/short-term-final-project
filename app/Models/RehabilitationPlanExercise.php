<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RehabilitationPlanExercise extends Model
{
    use HasFactory;

    protected $table = 'rehabilitation_plan_exercise';

    protected $fillable = [
        'rehabilitation_plan_id',
        'exercise_id',
        'sets',
        'reps',
        'rest_period',
        'duration_minutes',
    ];

    public function rehabilitationPlan()
    {
        return $this->belongsTo(RehabilitationPlan::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }
}