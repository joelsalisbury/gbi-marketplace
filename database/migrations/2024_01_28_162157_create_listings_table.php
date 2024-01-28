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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('year');
            $table->foreignId('make_id')->constrained('makes');
            $table->foreignId('model_id')->constrained('vehicle_models');
            $table->string('type');
            $table->boolean('auction');
            $table->boolean('classified');
            $table->decimal('price', 10, 2);
            $table->decimal('reserve', 10, 2);
            $table->foreignId('current_high_bidder')->nullable()->constrained('users');
            $table->foreignId('seller')->constrained('users');
            $table->text('description');
            $table->string('transmission');
            $table->string('color');
            $table->string('trim');
            $table->integer('mileage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
