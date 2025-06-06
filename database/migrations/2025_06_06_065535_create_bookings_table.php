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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('first_Name', 50);
            $table->string('last_Name', 50);
            $table->date('orderDate');
            $table->date('checkIn');
            $table->date('checkOut');
            $table->text('specialRequest')->nullable();
            $table->string('roomType', 50);
            $table->integer('roomNumber');
            $table->enum('status', ['checkIn', 'checkOut', 'In Progress']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
