<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKlien extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama',
        'nik',
        'nama_wali',
        'alamat',
        'no_telepon',
        'paket',
        'jenis_kelamin',
    ];
}
