<?php

namespace App\Http\Controllers;

use App\Models\SurveyBooking;
use Illuminate\Http\Request;

class SurveyBookingController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'nomor_telepon' => 'required|string',
            'email' => 'required|email',
            'alamat_lengkap_rumah' => 'required|string',
            'catatan_tambahan' => 'nullable|string',
        ]);

        $booking = SurveyBooking::create($data);
        return response()->json($booking, 201);
    }

    public function index()
    {
        $bookings = SurveyBooking::all();
        return response()->json($bookings);
    }
}
