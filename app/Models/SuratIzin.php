<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratIzin extends Model
{
    protected $fillable = [
        'user_id',
        'tanggal_izin',
        'alasan',
        'keterangan',
        'bukti_surat',
        'status',
    ];
}

