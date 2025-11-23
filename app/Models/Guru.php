<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // Nama tabel (jika bukan jamak)
    protected $table = 'gurus';

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'nip',
        'alamat',
        'telepon',
        'mapel'
    ];
}
