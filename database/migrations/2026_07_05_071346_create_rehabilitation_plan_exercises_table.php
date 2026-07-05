<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rehabilitation_plan_exercise', function (Blueprint $table) {

            $table->id();

            $table->foreignId('rehabilitation_plan_id')
                ->constrained('rehabilitation_plans')
                ->cascadeOnDelete();

            $table->foreignId('exercise_id')
                ->constrained('exercises')
                ->cascadeOnDelete();

            $table->integer('sets')->nullable();

            $table->integer('reps')->nullable();

            $table->integer('rest_period')->nullable();

            $table->integer('duration_minutes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rehabilitation_plan_exercise');
    }
};