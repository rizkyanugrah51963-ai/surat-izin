<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriIzin extends Model
{
    protected $table = 'kategori_izin';

    protected $fillable = [
        'nama',
        'keterangan'
    ];
}
