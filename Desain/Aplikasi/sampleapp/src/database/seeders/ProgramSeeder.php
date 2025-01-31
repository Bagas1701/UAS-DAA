<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programs')->insert([
            [
                'nama_program' => 'Program Penurunan Berat Badan',
                'deskripsi' => 'Program ini dirancang untuk membantu anggota menurunkan berat badan dengan latihan dan diet yang tepat.',
                'durasi' => '8 minggu',
                'fokus' => 'Penurunan Berat Badan',
            ],
            [
                'nama_program' => 'Program Kebugaran Umum',
                'deskripsi' => 'Program ini bertujuan untuk meningkatkan kebugaran umum dan kesehatan anggota.',
                'durasi' => '6 minggu',
                'fokus' => 'Kebugaran Umum',
            ],
            [
                'nama_program' => 'Program Membangun Otot',
                'deskripsi' => 'Program ini fokus pada peningkatan massa otot melalui latihan beban.',
                'durasi' => '10 minggu',
                'fokus' => 'Membangun Otot',
            ],
            [
                'nama_program' => 'Program Rehabilitasi',
                'deskripsi' => 'Program ini dirancang untuk membantu anggota yang sedang dalam proses rehabilitasi.',
                'durasi' => '12 minggu',
                'fokus' => 'Rehabilitasi',
            ],
        ]);
    }
}
