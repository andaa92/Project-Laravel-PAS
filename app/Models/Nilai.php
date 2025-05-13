<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'nilai';

    protected $fillable = ['nilai', 'predikat', 'semester', 'id_mata_pelajaran', 'id_guru', 'id_murid'];

    // Relasi dengan MataPelajaran
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mata_pelajaran');
    }

    // Relasi dengan Guru
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'id_guru');
    }

    // Relasi dengan Murid
    public function murid()
    {
        return $this->belongsTo(Murid::class, 'id_murid');
    }
}
