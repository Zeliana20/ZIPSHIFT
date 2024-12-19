<?php
namespace App\Http\Controllers;

use App\Models\SurveyBooking; // Pastikan model sudah dibuat
use Illuminate\Http\Request;

class SurveyBookingController extends Controller
{
    // Menampilkan form
    public function showForm()
    {
        return view('service'); // Halaman form untuk booking
    }

    // Menyimpan data dari form ke database
    public function storeBooking(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'alamat_lengkap_rumah' => 'required|string|max:500',
            'catatan_tambahan' => 'nullable|string|max:1000',
        ]);

        // Menyimpan data ke database
        $surveyBooking = SurveyBooking::create([
            'nama' => $request->input('nama'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'email' => $request->input('email'),
            'alamat_lengkap_rumah' => $request->input('alamat_lengkap_rumah'),
            'catatan_tambahan' => $request->input('catatan_tambahan'),
        ]);



        // Redirect ke halaman payment
        return redirect()->route('pembayaran');
    }
    public function showdoneSurvey(Request $request)
    {
        // Logika untuk halaman doneSurvey
        return view('doneSurvey'); 
    }
}