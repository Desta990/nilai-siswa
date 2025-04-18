<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas'; // Nama tabel
    protected $fillable = ['nama_kelas']; // Kolom yang bisa diisi

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
