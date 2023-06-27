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
        Schema::create('sensordata', function (Blueprint $table) {
            $table->id();
            $table->string('sensor');
            $table->string('location');
            $table->string('value1');
            $table->string('value2');
            $table->string('value3');
            $table->timestamp('reading_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensordata');
    }
};
