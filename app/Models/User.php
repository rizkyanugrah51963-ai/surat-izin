<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'role',
        'nisn',
        'kelas',
        'telepon',
        'asal_sekolah',
        'tanggal_lahir',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
