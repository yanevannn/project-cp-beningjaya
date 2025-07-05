<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Gallery::all();
        return view('admin.gallery.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],[
            'photo.required' => 'Foto wajib diisi',
            'photo.image' => 'File harus berupa gambar',
            'photo.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg',
            'photo.max' => 'Ukuran gambar maksimal 2MB',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('gallery', 'public');
        } else {
            return redirect()->back()->withErrors(['photo' => 'Foto Wajib Diisi !.']);
        }

        Gallery::create(['photo' => $photoPath]);

        return redirect()->route('gallery.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->photo && Storage::disk('public')->exists($gallery->photo)) {
            Storage::disk('public')->delete($gallery->photo);
        }
        $gallery->delete();
        return redirect()->route('gallery.index')->with('success', 'Data berhasil dihapus');
    }
}
