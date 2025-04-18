<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grade'; // Nama tabel
    protected $fillable = ['nama_grade']; // Kolom yang bisa diisi

    // Relasi ke model Nilai (opsional)
    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}
