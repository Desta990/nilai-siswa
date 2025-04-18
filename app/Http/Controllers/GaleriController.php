<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:32',
            'tanggal' => 'required|date|date_format:Y-m-d',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        // Simpan gambar langsung ke public/images
        $gambarName = time() . '.' . $request->file('gambar')->extension();
        $request->file('gambar')->move(public_path('images'), $gambarName);

        Galeri::create([
            'gambar' => 'images/' . $gambarName,
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'judul' => 'required|string|max:32',
            'tanggal' => 'required|date|date_format:Y-m-d',
            'deskripsi' => 'nullable|string|max:255',
        ]);

        $galeri = Galeri::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if (File::exists(public_path($galeri->gambar))) {
                File::delete(public_path($galeri->gambar));
            }

            // Simpan gambar baru ke public/images
            $gambarName = time() . '.' . $request->file('gambar')->extension();
            $request->file('gambar')->move(public_path('images'), $gambarName);
            $galeri->gambar = 'images/' . $gambarName;
        }

        $galeri->update([
            'judul' => $request->judul,
            'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        // Hapus gambar dari public/images
        if (File::exists(public_path($galeri->gambar))) {
            File::delete(public_path($galeri->gambar));
        }

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus.');
    }
  
    public function user()
    {
        
        $galeri = Galeri::latest()->paginate(6);

     
        return view('dashboard.galeri', compact('galeri'));
    }
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('dashboard.show', compact('galeri'));
    }
}
