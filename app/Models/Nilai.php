<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai'; // Nama tabel

    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'guru_id',
        'uts',
        'uas',
        'tugas',
        'nilai_akhir',
        'grade_id',
        'created_by', 
    ]; // Kolom yang dapat diisi

    // Relasi ke model Siswa
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

    // Relasi ke model Mapel
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    // Relasi ke model Guru
    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    // Relasi ke model Grade
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    // Relasi ke model User untuk kolom created_by
    
  
    public function user()
    {
        return $this->belongsTo(User::class, 'nisn', 'nisn');
    }
}

