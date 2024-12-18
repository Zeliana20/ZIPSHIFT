<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyBooking extends Model
{
    use HasFactory;

    protected $table = 'survey_bookings';

    protected $fillable = [
        'nama',
        'nomor_telepon',
        'email',
        'alamat_lengkap_rumah',
        'catatan_tambahan',
    ];
}
