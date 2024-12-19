<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function upload(Request $request)
    {
        // Validasi file
        $request->validate([
            'uploaded_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maks 2MB, hanya gambar
        ]);

        // Simpan file ke direktori storage
        if ($request->hasFile('uploaded_file')) {
            $file = $request->file('uploaded_file');
            $filename = time() . '_' . $file->getClientOriginalName(); // Nama unik untuk file
            $file->storeAs('public/uploads', $filename); // Simpan file di storage/app/public/uploads

            return back()->with('success', 'Bukti pembayaran berhasil diunggah!');
        }

        return back()->with('error', 'Gagal mengunggah file.');
    }

    public function doneSurvey(Request $request)
    {
        if ($request->isMethod('post')) {
            // Proses data POST
            $uploadedFilePath = $request->input('uploaded_file_path');
            
            // Lakukan tindakan, misalnya menyimpan ke database
    
            return view('doneSurvey')->with('success', 'Pembayaran berhasil!');
        }
    
        // Untuk GET
        return view('doneSurvey');
    }
}
