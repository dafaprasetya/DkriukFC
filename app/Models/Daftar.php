<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'tanggal_lahir',
        'nomor_hp',
        'email',
        'ktp'
    ];
}
