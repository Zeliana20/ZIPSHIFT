<?php

namespace App\Http\Controllers;

use App\Models\BayarLayanan; // Pastikan model sudah dibuat
use Illuminate\Http\Request;

class BayarLayananController extends Controller
{
    // Menampilkan form pembayaran
    public function showForm()
    {
        return view('bayar_layanan'); // Halaman form pembayaran layanan
    }

    // Menyimpan data pembayaran
    public function storePayment(Request $request)
    {
        // Validasi data
        $request->validate([
            'BuktiPembayaran' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'totalHarga' => 'required|numeric',
        ]);

        // Menyimpan file pembayaran
        $path = $request->file('BuktiPembayaran')->store('bukti_pembayaran', 'public');

        // Menyimpan data pembayaran ke database
        $bayarLayanan = BayarLayanan::create([
            'BuktiPembayaran' => $path,
            'totalHarga' => $request->input('totalHarga'),
        ]);

        // Redirect ke halaman sukses pembayaran
        return redirect()->route('done'); // Ganti dengan rute yang sesuai
    }
}
