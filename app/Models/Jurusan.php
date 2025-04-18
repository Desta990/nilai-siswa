<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan'; // Nama tabel
    protected $fillable = ['nama_jurusan']; // Kolom yang bisa diisi

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
