<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $table = 'mapel'; // Nama tabel
    protected $fillable = [
        'nama_mapel',
    ]; // Kolom yang dapat diisi

    /**
     * Relasi ke model Guru
     */
    public function guru()
    {
        return $this->hasMany(Guru::class, 'mapel_id');
    }

    /**
     * Relasi ke model Nilai
     */
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'mapel_id');
    }
}
