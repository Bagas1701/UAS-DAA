<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiKesehatan extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda
    protected $table = 'evaluasi_kesehatans';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'evaluasi_id',
        'anggota_id',
        'bmi',
        'vo2_max',
        'kekuatan_otot',
        'daya_tahan_kardiovaskular',
        'tanggal_evaluasi',
    ];
}
