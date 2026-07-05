<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    /** @use HasFactory<\Database\Factories\SpecializationFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function therapists()
    {
        return $this->hasMany(Therapist::class);
    }

}
