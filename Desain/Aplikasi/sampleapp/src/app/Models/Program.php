<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika berbeda
    protected $table = 'programs';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'program_id',
        'nama_program',
        'deskripsi',
        'durasi',
        'fokus',
    ];
}
