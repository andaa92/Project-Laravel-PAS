<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama', 
        'nip', 
        'email', 
        'no_telp', 
        'jenis_kelamin', 
        'tgl_lahir', 
        'id_user', 
        'id_mata_pelajaran'
    ];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi ke model MataPelajaran
    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mata_pelajaran');
    }

    // Relasi ke model Nilai
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_guru');
    }

    // Validasi atribut saat menyimpan data
    public static function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:20|unique:guru,nip',
            'email' => 'nullable|email|max:255|unique:guru,email',
            'no_telp' => 'nullable|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tgl_lahir' => 'required|date',
            'id_user' => 'required|exists:users,id',
            'id_mata_pelajaran' => 'required|exists:mata_pelajaran,id',
        ];
    }

    // Menambahkan custom accessor untuk nama lengkap
    public function getFullNameAttribute()
    {
        return ucfirst($this->nama);
    }
}
