<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Untuk menampilkan form review (web)
    public function create()
    {
        return view('inputReview'); // Menampilkan form review
    }

    // Untuk menyimpan review
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'service_name' => 'required|string|max:255',
            'review_date' => 'required|date',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
        ]);

        // Menyimpan review
        Review::create($validated);

        // Redirect ke route setelah review disubmit
        return redirect()->route('after-review');
    }
}