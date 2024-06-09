<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'keterangan',
    ];

    public function dataKlien()
    {
        return $this->belongsTo(DataKlien::class, 'id_client');
    }
}
