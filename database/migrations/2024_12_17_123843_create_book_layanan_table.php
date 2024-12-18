<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('book_layanan', function (Blueprint $table) {
            $table->id('ID_BookLayanan');
            $table->string('nama', 255);
            $table->bigInteger('noTelp');
            $table->string('Alamat', 255);
            $table->string('AlamatTujuan', 255)->nullable();
            $table->float('Jarak')->nullable();
            $table->string('DaftarBarang', 250);
            $table->float('BeratBarang')->nullable();
            $table->date('Tanggal');
            $table->enum('JenisLayanan', ['Express', 'Regular'])->nullable();
            $table->integer('KisaranHarga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_layanan');
    }
};
