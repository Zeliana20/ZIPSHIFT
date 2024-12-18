<?php

namespace App\Http\Controllers;

use App\Models\BookLayanan; // Pastikan model sudah dibuat
use Illuminate\Http\Request;

class BookLayananController extends Controller
{
    // Menampilkan form
    public function showForm()
    {
        return view('book_layanan'); // Halaman form untuk booking layanan
    }

    // Menyimpan data dari form ke database
    public function storeBooking(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'noTelp' => 'required|string|max:15',
            'Alamat' => 'required|string|max:500',
            'DaftarBarang' => 'required|string|max:1000',
            'Tanggal' => 'required|date',
            'KisaranHarga' => 'required|numeric',
        ]);

        // Menyimpan data ke database
        $bookLayanan = BookLayanan::create([
            'nama' => $request->input('nama'),
            'noTelp' => $request->input('noTelp'),
            'Alamat' => $request->input('Alamat'),
            'DaftarBarang' => $request->input('DaftarBarang'),
            'Tanggal' => $request->input('Tanggal'),
            'KisaranHarga' => $request->input('KisaranHarga'),
        ]);

        // Redirect ke halaman pembayaran
        return redirect()->route('pembayaran'); // Ganti dengan rute yang sesuai
    }
}
