<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    public function index()
    {
        $data = Testimoni::all();
        return view('admin.testimoni.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'star' => 'required|integer|min:1|max:5',
            'testimoni' => 'required|string|max:1000',
        ],[
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',
            'photo.required' => 'Foto wajib diisi.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg.',
            'photo.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'star.required' => 'Rating wajib diisi.',
            'star.integer' => 'Rating harus berupa angka.',
            'star.min' => 'Rating minimal 1.',
            'star.max' => 'Rating maksimal 5.',
            'testimoni.required' => 'Testimoni wajib diisi.',
            'testimoni.string' => 'Testimoni harus berupa teks.',
            'testimoni.max' => 'Testimoni tidak boleh lebih dari 1000 karakter.',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('testimonis', 'public');
        } else {
            return redirect()->back()->withErrors(['photo' => 'Photo is required.']);
        }

        Testimoni::create([
            'name' => $request->input('name'),
            'photo' => $photoPath,
            'star' => $request->input('star'),
            'testimoni' => $request->input('testimoni'),
        ]);

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $testimoni = Testimoni::findOrFail($id);

        $request->validate([
            'status' => 'required|in:active,inactive',
        ], [
            'status.required' => 'Status wajib diisi.',
            'status.in' => 'Status harus berupa "active" atau "inactive".',
        ]);

        $testimoni->status = $request->input('status');
        $testimoni->save();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        if ($testimoni->photo) {
            // Delete the photo from storage
            Storage::disk('public')->delete($testimoni->photo);
        }
        $testimoni->delete();

        return redirect()->route('testimoni.index')->with('success', 'Testimoni berhasil dihapus.');
    }

    
}
