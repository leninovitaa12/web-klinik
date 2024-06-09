<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'is_active',
        'bill_status',
    ];

    public function dataKlien()
    {
        return $this->belongsTo(DataKlien::class, 'id_client');
    }
}
