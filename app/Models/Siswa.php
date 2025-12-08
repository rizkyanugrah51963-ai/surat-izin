<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'username',
        'email',
        'nisn',
        'provinsi',
        'kabupaten',
        'kecamatan',
        'jenjang',
        'sekolah',
    ];
}
