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
        Schema::create('therapy_sessions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('rehabilitation_plan_id')->constrained('rehabilitation_plans');
            $table->date('session_date');
            $table->text('after_session_notes');
            $table->enum('status', ['rescheduled', 'completed', 'canceled'])->default('rescheduled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapy_sessions');
    }
};
