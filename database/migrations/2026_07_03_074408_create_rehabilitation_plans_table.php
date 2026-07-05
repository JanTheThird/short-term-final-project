<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rehabilitation_plans', function (Blueprint $table) {

            $table->id();

            $table->foreignId('assessment_id')
                ->constrained('assessments')
                ->cascadeOnDelete();

            $table->text('diagnosis');

            $table->text('goals');

            $table->text('treatment_plan');

            $table->date('start_date');

            $table->date('end_date');

            $table->enum('status', [
                'Active',
                'Completed',
                'Discontinued'
            ])->default('Active');

            $table->unique([
                'rehabilitation_plan_id',
                'exercise_id'
            ]);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rehabilitation_plans');
    }
};