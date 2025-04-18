<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $table = 'galeri'; // Nama tabel

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'created_by',
        'tanggal', // Tambahkan kolom created_by
    ]; // Kolom yang dapat diisi

    /**
     * Relasi ke model User untuk kolom created_by
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
