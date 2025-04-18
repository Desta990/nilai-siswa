<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Grade;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Pastikan hanya pengguna yang login bisa mengakses
    }

    // Menampilkan daftar nilai berdasarkan siswa_id atau semua nilai
    public function index(Request $request)
    {
        $nilaiQuery = Nilai::with(['siswa', 'guru', 'mapel', 'grade']);

        if ($request->has('siswa_id')) {
            $siswa_id = $request->input('siswa_id');
            $nilaiQuery->where('siswa_id', $siswa_id);
            $siswa = Siswa::findOrFail($siswa_id);

            $nilai = $nilaiQuery->orderBy('created_at', 'desc')->get();
            return view('nilai.index', compact('nilai', 'siswa'));
        }

        $nilai = $nilaiQuery->orderBy('created_at', 'desc')->get();
        return view('nilai.index', compact('nilai'));
    }

    // Menampilkan form untuk menambahkan nilai
    public function create($siswa_id = null)
    {
        $siswa = $siswa_id ? Siswa::findOrFail($siswa_id) : null;
        $allSiswa = Siswa::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        $grades = Grade::all();

        return view('nilai.create', compact('siswa', 'allSiswa', 'guru', 'mapel', 'grades'));
    }

    // Menyimpan nilai baru ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'guru_id' => 'required|exists:guru,id',
            'mapel_id' => 'required|exists:mapel,id',
            'uts' => 'required|integer|min:0|max:100',
            'uas' => 'required|integer|min:0|max:100',
            'tugas' => 'required|integer|min:0|max:100',
            'nilai_akhir' => 'required|numeric|min:0|max:100',
            'grade_id' => 'required|exists:grade,id',
        ]);

        Nilai::create($validated);

        return redirect()->route('nilai.index', ['siswa_id' => $request->siswa_id])
            ->with('success', 'Nilai berhasil ditambahkan!');
    }

    // Menampilkan form edit nilai
    public function edit(Nilai $nilai)
    {
        $allSiswa = Siswa::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        $grades = Grade::all();

        return view('nilai.edit', compact('nilai', 'allSiswa', 'guru', 'mapel', 'grades'));
    }

    // Memperbarui data nilai
    public function update(Request $request, Nilai $nilai)
    {
        $validated = $request->validate([
            'siswa_id' => 'required|exists:siswa,id',
            'guru_id' => 'required|exists:guru,id',
            'mapel_id' => 'required|exists:mapel,id',
            'uts' => 'required|integer|min:0|max:100',
            'uas' => 'required|integer|min:0|max:100',
            'tugas' => 'required|integer|min:0|max:100',
            'nilai_akhir' => 'required|numeric|min:0|max:100',
            'grade_id' => 'required|exists:grade,id',
        ]);

        $nilai->update($validated);

        return redirect()->route('nilai.index', ['siswa_id' => $nilai->siswa_id])
            ->with('success', 'Nilai berhasil diperbarui!');
    }

    // Menghapus nilai
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return redirect()->route('nilai.index', ['siswa_id' => $nilai->siswa_id])
            ->with('success', 'Nilai berhasil dihapus!');
    }

    // Menampilkan nilai siswa berdasarkan NISN saat login
    public function showNilaiSiswa()
    {
        $user = Auth::user();

        // Pastikan user memiliki NISN
        if (!$user->nisn) {
            return redirect()->route('dashboard')->with('error', 'Anda bukan siswa.');
        }

        // Ambil nilai berdasarkan NISN siswa yang sedang login
        $nilai = Nilai::where('nisn', $user->nisn)->with(['mapel', 'guru', 'grade'])->get();

        return view('siswa.nilai', compact('nilai'));
    }
}
