<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function rehabilitationPlans()
    {
        return $this->belongsToMany(
            RehabilitationPlan::class,
            'rehabilitation_plan_exercise'
        )->withPivot(
            'sets',
            'reps',
            'rest_period',
            'duration_minutes'
        )->withTimestamps();
    }
}