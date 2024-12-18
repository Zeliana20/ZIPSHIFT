<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayarLayanan extends Model
{
    use HasFactory;

    protected $table = 'bayar_layanan';
    protected $primaryKey = 'ID_BayL';

    protected $fillable = [
        'BuktiPembayaran',
        'totalHarga',
    ];
}
