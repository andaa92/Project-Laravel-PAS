<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'password', 'role'];

    public function guru()
    {
        return $this->hasMany(Guru::class, 'id_user');
    }

    public function murid()
    {
        return $this->hasMany(Murid::class, 'id_user');
    }
}


