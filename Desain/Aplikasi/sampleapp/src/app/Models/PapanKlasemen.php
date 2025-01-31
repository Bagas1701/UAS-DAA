<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PapanKlasemen extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda
    protected $table = 'papan_klasemens';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'klasemen_id',
        'anggota_id',
        'skor',
        'pringkat',
        'status',
    ];
}
