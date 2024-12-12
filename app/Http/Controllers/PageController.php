<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Halaman Utama
    public function showHomepage()
    {
        return view('homepage');
    }

    // Halaman Login
    public function showLogin()
    {
        return view('login');
    }

    // Halaman Order Form
    public function showOrderForm()
    {
        return view('orderForm');
    }

    // Halaman Pembayaran
    public function showPembayaran()
    {
        return view('pembayaran');
    }

    // Halaman Selesai
    public function showDone()
    {
        return view('done');
    }

    // Halaman Sign In
    public function showSignin()
    {
        return view('signin');
    }

    // Halaman Tentang Kami
    public function showTentangKami()
    {
        return view('tentangKami');
    }

    // Halaman Homepage Login (opsional)
    public function showHomepageLogin()
    {
        return view('homepageLogin');
    }

    // In PageController.php
    public function showService()
    {
        return view('service'); // Return the service view
    }

    public function showinputReview()
    {
        return view('inputReview'); // Return the inputReview view
    }
}
