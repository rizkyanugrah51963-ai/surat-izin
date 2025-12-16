<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriIzin extends Model
{
    use HasFactory;

    protected $table = 'kategori_izin';

    protected $fillable = [
        'nama',
        'keterangan',
    ];
}
