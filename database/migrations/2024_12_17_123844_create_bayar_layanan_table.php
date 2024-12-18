<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bayar_layanan', function (Blueprint $table) {
            $table->id('ID_BayL');
            $table->binary('BuktiPembayaran'); // Tipe BLOB untuk file bukti
            $table->integer('totalHarga');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bayar_layanan');
    }
};
