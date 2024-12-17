<?php

namespace App\Http\Controllers;

use App\Models\BayarLayanan;
use Illuminate\Http\Request;

class ServicePaymentController extends Controller
{
    public function index()
    {
        return response()->json(BayarLayanan::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Bukti_Pembayaran' => 'required|file',
            'totalHarga' => 'required|numeric',
        ]);

        $bayarLayanan = BayarLayanan::create($validated);

        return response()->json($bayarLayanan, 201);
    }

    public function show($id)
    {
        $bayarLayanan = BayarLayanan::find($id);
        if (!$bayarLayanan) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($bayarLayanan, 200);
    }

    public function update(Request $request, $id)
    {
        $bayarLayanan = BayarLayanan::find($id);
        if (!$bayarLayanan) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $validated = $request->validate([
            'Bukti_Pembayaran' => 'file',
            'totalHarga' => 'numeric',
        ]);

        $bayarLayanan->update($validated);

        return response()->json($bayarLayanan, 200);
    }

    public function destroy($id)
    {
        $bayarLayanan = BayarLayanan::find($id);
        if (!$bayarLayanan) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $bayarLayanan->delete();

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}
