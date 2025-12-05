<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registrasi extends Model
{
    protected $table = 'registrasi';

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
