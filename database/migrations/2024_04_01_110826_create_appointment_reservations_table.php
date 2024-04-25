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
        Schema::create('appointment_reservations', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['pending','approved','denied']);
            $table->foreignId('member_id')->constrained('members')->onDelete('cascade');
            $table->foreignId('appointment_id')->constrained('appointments')->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments_reservation');
    }
};
