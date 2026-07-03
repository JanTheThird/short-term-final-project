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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('system_user_id')->constrained('system_users');
            $table->foreignId('medical_condition_id')->constrained('medical_conditions');

            $table->enum('gender', ['male', 'female'])->nullable();
            $table->string('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('emergency_contact')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
