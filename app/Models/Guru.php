<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru'; // Nama tabel
    protected $fillable = [
        'nip',
        'nama_guru',
        'mapel_id',
        'created_by', // Tambahkan kolom created_by
    ]; // Kolom yang dapat diisi

    /**
     * Relasi ke model Mapel
     */
    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    /**
     * Relasi ke model Nilai
     */
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'guru_id');
    }

    /**
     * Relasi ke model User untuk kolom created_by
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
