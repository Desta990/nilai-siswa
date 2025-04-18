<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa'; // Nama tabel

    protected $fillable = [
        'nisn',
        'nama',
        'kelas_id',
        'jurusan_id',
        'foto', // Tambahkan kolom foto
        'created_by', // Kolom created_by
    ]; // Kolom yang bisa diisi

    // Relasi ke model Kelas
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    // Relasi ke model Jurusan
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }

    // Relasi ke model Nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    // Relasi ke model User untuk kolom created_by
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
