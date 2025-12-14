<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    use HasUuids;

    protected $fillable = [
        'fileable_id',
        'fileable_type',
        'filename',
        'path',
        'mime_type',
        'size',
    ];

    public function fileable()
    {
        return $this->morphTo();
    }

    // URL tampil
    public function getFileStreamAttribute()
    {
        return Storage::url($this->path);
    }
}
