<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Murid extends Model
{
    use HasFactory;

    protected $table = 'murid';

    protected $fillable = ['nama', 'nis', 'kelas', 'no_telp', 'jenis_kelamin', 'tgl_lahir', 'id_user'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_murid');
    }
}


