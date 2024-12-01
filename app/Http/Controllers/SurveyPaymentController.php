<?php

namespace App\Http\Controllers;

use App\Models\SurveyPayment;
use Illuminate\Http\Request;

class SurveyPaymentController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'credit_card' => 'required|string',
            'number' => 'required|string',
            'payment_receipt' => 'required|string',
            'subtotal' => 'required|numeric',
            'total' => 'required|numeric',
        ]);

        $payment = SurveyPayment::create($data);
        return response()->json($payment, 201);
    }

    public function index()
    {
        $payments = SurveyPayment::all();
        return response()->json($payments);
    }
}
