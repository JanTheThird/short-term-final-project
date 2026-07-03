<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. I guess
     */
    public function up(): void
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->foreignId('request_id')->constrained('requests');

            $table->integer('pain_level');
            $table->integer('mobility_level');
            $table->integer('strength_level');
            $table->integer('flexibility_level');
            $table->text('remarks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assessments');
    }
};
