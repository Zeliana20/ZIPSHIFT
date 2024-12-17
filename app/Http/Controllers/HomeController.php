<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Method untuk menampilkan homepage (halaman depan yang tidak login)
    public function index()
    {
        return view('homepageLogin'); // Halaman homepage yang sudah Anda buat
    }

    // Method untuk menampilkan halaman login
    public function showLogin()
    {
        return view('login'); // Pastikan Anda memiliki tampilan login di resources/views/auth/login.blade.php
    }

    // Method untuk menampilkan halaman setelah login (homepageLogin)
    public function dashboard()
    {
        return view('dashboard'); // Halaman dashboard setelah login
    }
}
