<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $query = Siswa::with(['kelas', 'jurusan']);

        if ($request->has('search')) {
            $query->where('nama', 'like', '%' . $request->search . '%')
                  ->orWhere('nisn', 'like', '%' . $request->search . '%');
        }

        $siswa = $query->get();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('siswa.create', compact('kelas', 'jurusan'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nisn' => 'required|unique:siswa',
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan_id' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        if ($request->hasFile('foto')) {
            $fotoName = time() . '.' . $request->file('foto')->extension();
            $request->file('foto')->move(public_path('images'), $fotoName);
            $validated['foto'] = 'images/' . $fotoName;
        }

        Siswa::create($validated);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }

    public function edit(Siswa $siswa)
    {
        $kelas = Kelas::all();
        $jurusan = Jurusan::all();
        return view('siswa.edit', compact('siswa', 'kelas', 'jurusan'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $validated = $request->validate([
            'nisn' => 'required|unique:siswa,nisn,' . $siswa->id,
            'nama' => 'required',
            'kelas_id' => 'required',
            'jurusan_id' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            if ($siswa->foto && File::exists(public_path($siswa->foto))) {
                File::delete(public_path($siswa->foto));
            }

            $fotoName = time() . '.' . $request->file('foto')->extension();
            $request->file('foto')->move(public_path('images'), $fotoName);
            $validated['foto'] = 'images/' . $fotoName;
        }

        $siswa->update($validated);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil diperbarui!');
    }

    public function destroy(Siswa $siswa)
    {
        if ($siswa->foto && File::exists(public_path($siswa->foto))) {
            File::delete(public_path($siswa->foto));
        }

        $siswa->delete();
        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil dihapus!');
    }

    public function show(Siswa $siswa)
    {
        $nilai = Nilai::where('siswa_id', $siswa->id)->with('grade')->get();
        return view('siswa.show', compact('siswa', 'nilai'));
    }
}
