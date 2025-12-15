<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratIzin extends Model
{
    protected $fillable = [
        'siswa_id',
        'nama_siswa',
        'kelas',
        'tanggal_izin',
        'alasan',
        'keterangan',
        'bukti',
        'status',
    ];

    public function siswa()
    {
        return $this->belongsTo(User::class, 'siswa_id');
    }
}


