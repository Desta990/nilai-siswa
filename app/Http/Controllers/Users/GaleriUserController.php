<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriUserController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all(); // Ambil semua data galeri
        return view('user.galeri.index', compact('galeri'));
    }

    public function show($id)
    {
        $galeri = Galeri::findOrFail($id); // Ambil data berdasarkan ID
        return view('user.galeri.show', compact('galeri'));
    }
}
