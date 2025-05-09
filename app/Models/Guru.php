<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    protected $fillable = ['nama', 'nip', 'email', 'no_telp', 'jenis_kelamin', 'tgl_lahir', 'id_user', 'id_mata_pelajaran'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mata_pelajaran');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_guru');
    }
}


