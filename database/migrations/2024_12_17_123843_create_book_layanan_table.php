<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('book_layanan', function (Blueprint $table) {
            $table->id('ID_BookLayanan');
            $table->string('nama', 50);
            $table->bigInteger('noTelp'); // Menggunakan bigInteger untuk nomor telepon
            $table->string('Alamat', 100);
            $table->string('DaftarBarang', 250);
            $table->date('Tanggal');
            $table->integer('KisaranHarga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_layanan');
    }
};
