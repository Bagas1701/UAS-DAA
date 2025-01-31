<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda
    protected $table = 'anggotas';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'anggota_id',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'berat_badan',
        'tinggi_badan',
        'tujuan',
        'riwayat_kesehatan',
        'aktivitas_harian',
        'program_id',
        'skor_kebugaran',
    ];
}
