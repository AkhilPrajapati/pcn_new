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
        Schema::create('chairmen', function (Blueprint $table) {
            $table->id();

            $table->foreignId('media_id')->constrained();
            $table->foreignId('user_id')->constrained();

            $table->enum('status', ['approved', 'pending'])->nullable();
            $table->enum('activity', ['active', 'inactive'])->nullable();

            $table->string('name');
            $table->string('nepali_name');
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('contact')->unique();
            $table->string('citizen_number')->unique();
            $table->string('citizen_district')->nullable();

            $table->string('photo')->nullable();
            $table->string('citizenship')->nullable();

            $table->string('appointment_date')->nullable();
            $table->string('retirement_date')->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chairmen');
    }
};
