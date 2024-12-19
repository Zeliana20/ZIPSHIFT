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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id('ID_Review'); // Primary key
            $table->string('name'); // Nama pengguna
            $table->string('service_name'); // Nama layanan
            $table->date('review_date'); // Tanggal ulasan
            $table->integer('rating')->unsigned()->default(1); // Rating (1-5)
            $table->text('review'); // Isi ulasan
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};