<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\File;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Field yang boleh diisi mass-assignment
     * (WAJIB sesuai dengan RegisterController)
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'nisn',
        'jenjang_sekolah',
        'kelas',
        'asal_sekolah',
        'password',
        'role',
    ];

    /**
     * Field yang disembunyikan
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Cast tipe data
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relasi foto profil (polymorphic)
     */
    public function files()
{
    return $this->morphMany(File::class, 'fileable');
}

}
