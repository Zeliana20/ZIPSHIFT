<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
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

        $payment = Payment::create($data);
        return response()->json($payment, 201);
    }

    public function index()
    {
        $payments = Payment::all();
        return response()->json($payments);
    }
}
