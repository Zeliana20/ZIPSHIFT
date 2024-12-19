<?php

namespace App\Http\Controllers;

use App\Models\BayarLayanan; // Pastikan model sudah dibuat
use Illuminate\Http\Request;

class BayarLayananController extends Controller
{
    // Menampilkan form pembayaran
    public function showForm(Request $request)
    {
        $kisaranHarga = $request->query('kisaranHarga');
        return view('pembayaran', compact('kisaranHarga')); // Halaman form pembayaran layanan
    }

    // Menyimpan data pembayaran
    public function storePayment(Request $request)
    {
        // Menyimpan file pembayaran
        $path = $request->file('BuktiPembayaran')->store('uploads', 'public');

        // Menyimpan data pembayaran ke database
        $bayarLayanan = BayarLayanan::create([
            'BuktiPembayaran' => $path,
            'totalHarga' => $request->input('totalHarga'),
        ]);

        // Redirect ke halaman sukses pembayaran
        return redirect()->route('done'); // Ganti dengan rute yang sesuai
    }
}