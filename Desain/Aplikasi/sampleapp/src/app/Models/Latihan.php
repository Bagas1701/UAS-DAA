<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latihan extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda
    protected $table = 'latihans';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'latihan_id',
        'anggota_id',
        'tanggal',
        'waktu',
        'aktivitas',
        'durasi',
    ];
}
