<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rehabilitation_plans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('assessment_id')->constrained('assessments');
            $table->foreignId('exercise_id')->constrained('exercises');

            $table->text('diagnosis');
            $table->text('goals');
            $table->text('treatment_plan');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['active', 'completed', 'discontinued'])->default('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehabilitation_plans');
    }
};
