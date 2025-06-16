<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Product;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('admin.login');
    }


    public function dologin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diiisi',
            'password.required' => 'password wajib diiisi'
        ]);

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->withErrors('Email dan Password tidak sesuai!')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('admin.dashboard', [
            'totalTestimoni' => Testimoni::count(),
            'totalProduct' => Product::count(),
            'totalGallery' => Gallery::count(),
        ]);
    }
}
