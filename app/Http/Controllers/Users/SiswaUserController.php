<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\Nilai;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class SiswaUserController extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::with(['kelas', 'jurusan']);

        // Cek apakah ada input pencarian
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                  ->orWhere('nisn', 'like', "%$search%");
            });
        }

        $siswa = $query->paginate(9); // Gunakan pagination agar tidak terlalu banyak data dalam satu halaman
        return view('user.siswa.index', compact('siswa'));
    }

    public function show($nisn)
    {
        $siswa = Siswa::with(['kelas', 'jurusan'])->where('nisn', $nisn)->firstOrFail();
        $nilai = Nilai::where('siswa_id', $siswa->id)->with(['mapel', 'grade'])->get();

        return view('user.siswa.show', compact('siswa', 'nilai'));
    }

    // Menambahkan metode untuk mendownload PDF
    public function downloadSiswaPdf()
    {
        // Ambil semua data siswa (sesuaikan query jika perlu)
        $siswa = Siswa::with(['kelas', 'jurusan'])->get();

        // Generate PDF menggunakan view tertentu
        $pdf = PDF::loadView('user.siswa.pdf', compact('siswa'));

        // Kembalikan PDF sebagai file yang dapat diunduh
        return $pdf->download('daftar_siswa.pdf');
    }
}
