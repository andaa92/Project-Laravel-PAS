<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        // kosong, tidak masalah
    ];

    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_user');
    }

    public function murid()
    {
        return $this->hasMany(Murid::class, 'id_user');
    }

    // Tidak perlu accessor setPassword jika sudah pakai Hash::make di controller
}
