<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'credit_card',
        'number',
        'payment_receipt',
        'subtotal',
        'total',
    ];
}
