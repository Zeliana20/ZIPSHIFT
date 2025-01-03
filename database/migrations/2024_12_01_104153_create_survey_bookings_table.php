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
        Schema::create('survey_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255);
            $table->string('nomor_telepon', 20);
            $table->string('email', 255);
            $table->text('alamat_lengkap_rumah');
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_bookings');
    }
};
