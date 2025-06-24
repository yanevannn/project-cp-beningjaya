<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $reviews = Testimoni::where('status', 'active')->get();
        $galleries = Gallery::all();
        return view('index', compact('products', 'reviews', 'galleries'));
    }

    public function review()
    {
        return view('review');
    }

    public function doReview(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'rating' => 'required|integer|between:1,5',
                'review' => 'required|string|max:1000',
            ],
            [
                'name.required' => 'Nama wajib diisi.',
                'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
                'photo.image' => 'Foto harus berupa file gambar.',
                'photo.mimes' => 'Foto harus berformat jpeg, png, jpg, atau gif.',
                'photo.max' => 'Ukuran foto tidak boleh lebih dari 2MB.',
                'rating.required' => 'Rating wajib diisi.',
                'rating.integer' => 'Rating harus berupa angka.',
                'rating.between' => 'Rating harus antara 1 sampai 5.',
                'review.required' => 'Ulasan wajib diisi.',
                'review.max' => 'Ulasan tidak boleh lebih dari 1000 karakter.',
            ]
        );

        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        Testimoni::create([
            'name' => $request->name,
            'photo' => $photoPath,
            'star' => $request->rating,
            'review' => $request->review,
        ]);   

        return redirect()->route('review')->with('success', 'Terimakasi atas review anda!');
    }
}
