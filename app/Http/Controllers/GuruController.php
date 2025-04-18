<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    // Menampilkan daftar guru
    public function index()
    {
        // Mengambil semua data guru beserta mapelnya
        $gurus = Guru::with('mapel')->get();
        return view('guru.index', compact('gurus')); // Mengirim data ke view
    }

    // Menampilkan form untuk menambahkan guru baru
    public function create()
    {
        // Ambil semua data mapel untuk dropdown
        $mapels = Mapel::all();
        return view('guru.create', compact('mapels')); // Menampilkan form tambah guru
    }

    // Menyimpan data guru baru
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nip' => 'required|unique:guru,nip', // Tabel 'guru'
            'nama_guru' => 'required|string|max:255',
            'mapel_id' => 'required|exists:mapel,id', // Memastikan mapel_id ada di tabel mapels
        ]);

        // Menyimpan data guru ke database
        Guru::create([
            'nip' => $validated['nip'],
            'nama_guru' => $validated['nama_guru'],
            'mapel_id' => $validated['mapel_id'],
        ]);

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit data guru
    public function edit(Guru $guru)
    {
        // Ambil semua data mapel untuk dropdown
        $mapels = Mapel::all();
        return view('guru.edit', compact('guru', 'mapels')); // Menampilkan form edit dengan data guru yang dipilih
    }

    // Mengupdate data guru
    public function update(Request $request, Guru $guru)
    {
        // Validasi input
        $validated = $request->validate([
            'nip' => 'required|unique:guru,nip,' . $guru->id, // Tabel 'guru'
            'nama_guru' => 'required|string|max:255',
            'mapel_id' => 'required|exists:mapel,id',
        ]);

        // Mengupdate data guru
        $guru->update([
            'nip' => $validated['nip'],
            'nama_guru' => $validated['nama_guru'],
            'mapel_id' => $validated['mapel_id'],
        ]);

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui!');
    }

    // Menghapus data guru
    public function destroy(Guru $guru)
    {
        // Menghapus data guru
        $guru->delete();

        // Redirect ke halaman daftar guru dengan pesan sukses
        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus!');
    }
}
