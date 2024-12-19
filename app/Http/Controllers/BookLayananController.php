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

        // Menyimpan data ke database
        $bookLayanan = BookLayanan::create([
            'nama' => $request->input('nama'),
            'noTelp' => $request->input('noTelp'),
            'Alamat' => $request->input('Alamat'),
            'AlamatTujuan' => $request->input('AlamatTujuan'),
            'Jarak' => $request->input('Jarak'),
            'DaftarBarang' => $request->input('DaftarBarang'),
            'BeratBarang' => $request->input('BeratBarang'),
            'Tanggal' => $request->input('Tanggal'),
            'JenisLayanan' => $request->input('JenisLayanan'),
            'KisaranHarga' => $request->input('KisaranHarga'),
        ]);

        // Redirect ke halaman pembayaran
        return redirect()->route('pembayaran', ['kisaranHarga' => $bookLayanan->KisaranHarga]); // Ganti dengan rute yang sesuai
    }
}