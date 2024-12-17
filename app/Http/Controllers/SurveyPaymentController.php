<?php

namespace App\Http\Controllers;

use App\Models\BayarSurvei;
use Illuminate\Http\Request;

class SurveyPaymentController extends Controller
{
    public function index()
    {
        return response()->json(BayarSurvei::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'Bukti_Pembayaran' => 'required|file',
            'totalHarga' => 'required|numeric',
        ]);

        $bayarSurvei = BayarSurvei::create($validated);

        return response()->json($bayarSurvei, 201);
    }

    public function show($id)
    {
        $bayarSurvei = BayarSurvei::find($id);
        if (!$bayarSurvei) {
            return response()->json(['message' => 'Not Found'], 404);
        }
        return response()->json($bayarSurvei, 200);
    }

    public function update(Request $request, $id)
    {
        $bayarSurvei = BayarSurvei::find($id);
        if (!$bayarSurvei) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $validated = $request->validate([
            'Bukti_Pembayaran' => 'file',
            'totalHarga' => 'numeric',
        ]);

        $bayarSurvei->update($validated);

        return response()->json($bayarSurvei, 200);
    }

    public function destroy($id)
    {
        $bayarSurvei = BayarSurvei::find($id);
        if (!$bayarSurvei) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $bayarSurvei->delete();

        return response()->json(['message' => 'Deleted successfully'], 200);
    }
}