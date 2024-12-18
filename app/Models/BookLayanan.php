<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookLayanan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'book_layanan';
    protected $primaryKey = 'ID_BookLayanan';

    protected $fillable = [
        'nama',
        'noTelp',
        'Alamat',
        'AlamatTujuan',
        'Jarak',
        'DaftarBarang',
        'BeratBarang',
        'Tanggal',
        'JenisLayanan',
        'KisaranHarga',
    ];
}
