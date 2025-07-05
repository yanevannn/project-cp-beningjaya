<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('admin.products.index', compact('data'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:1000',
        ],[
            'name.required' => 'Nama layanan wajib diisi.',
            'name.string' => 'Nama layanan harus berupa teks.',
            'name.max' => 'Nama layanan tidak boleh lebih dari 255 karakter.',
            'photo.required' => 'Foto layanan wajib diisi.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg.',
            'photo.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'description.required' => 'Deskripsi layanan wajib diisi.',
            'description.string' => 'Deskripsi layanan harus berupa teks.',
            'description.max' => 'Deskripsi layanan tidak boleh lebih dari 1000 karakter.',
        ]);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoPath = $photo->store('products', 'public');
        } else {
            return redirect()->back()->withErrors(['photo' => 'Foto Wajib Diisi !.']);
        }
        $data = [
            'name' => $request->input('name'),
            'photo' => $photoPath,
            'description' => $request->input('description'),
        ];
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:products,name,' . $id,
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required|string|max:1000',
        ],[
            'name.required' => 'Nama layanan wajib diisi.',
            'name.string' => 'Nama layanan harus berupa teks.',
            'name.max' => 'Nama layanan tidak boleh lebih dari 255 karakter.',
            'photo.image' => 'File harus berupa gambar.',
            'photo.mimes' => 'Format gambar harus jpeg, png, jpg, gif, atau svg.',
            'photo.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
            'description.required' => 'Deskripsi layanan wajib diisi.',
            'description.string' => 'Deskripsi layanan harus berupa teks.',
            'description.max' => 'Deskripsi layanan tidak boleh lebih dari 1000 karakter.',
        ]);

        $product = Product::findOrFail($id);
        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ];

        if ($request->hasFile('photo')) {
            if ($product->photo) {
                Storage::disk('public')->delete($product->photo);
            }
            $photo = $request->file('photo');
            $data['photo'] = $photo->store('products', 'public');
        }

        $product->update($data);

        return redirect()->route('products.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->photo) {
            Storage::disk('public')->delete($product->photo);
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
