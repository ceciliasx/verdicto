<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{
    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1000',
        ]);

        Testimonial::create([
            'user_id' => Auth::id(),
            'content' => $request->content,
        ]);

        return redirect('dashboard/')->with('status', 'Testimoni berhasil dikirim!');
    }
}