<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLayanan extends Model
{
    use HasFactory;

    protected $table = 'book_layanan';
    protected $primaryKey = 'ID_BookLayanan';

    protected $fillable = [
        'nama',
        'noTelp',
        'Alamat',
        'DaftarBarang',
        'Tanggal',
        'KisaranHarga',
    ];
}
