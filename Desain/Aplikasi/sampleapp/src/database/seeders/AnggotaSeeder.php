<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnggotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('anggotas')->insert([
            [
                'nama' => 'Andi Setiawan',
                'tanggal_lahir' => '1990-05-15',
                'jenis_kelamin' => 'L',
                'berat_badan' => 75.0,
                'tinggi_badan' => 175.0,
                'tujuan' => 'Menurunkan Berat Badan',
                'riwayat_kesehatan' => 'Tidak Ada',
                'aktivitas_harian' => 'Bekerja di kantor, berolahraga 3 kali seminggu',
                'program_id' => 1,
                'skor_kebugaran' => 80.5,
            ],
            [
                'nama' => 'Siti Aminah',
                'tanggal_lahir' => '1985-08-20',
                'jenis_kelamin' => 'P',
                'berat_badan' => 60.0,
                'tinggi_badan' => 165.0,
                'tujuan' => 'Kebugaran Umum',
                'riwayat_kesehatan' => 'Asam ringan',
                'aktivitas_harian' => 'Aktif berolahraga setiap hari',
                'program_id' => 2,
                'skor_kebugaran' => 85.5,
            ],
            [
                'nama' => 'Budi Santoso',
                'tanggal_lahir' => '1992-12-10',
                'jenis_kelamin' => 'L',
                'berat_badan' => 85.0,
                'tinggi_badan' => 180.0,
                'tujuan' => 'Membangun Otot',
                'riwayat_kesehatan' => 'Tidak Ada',
                'aktivitas_harian' => 'Bersepeda dan angkat beban',
                'program_id' => 3,
                'skor_kebugaran' => 90.0,
            ],
            [
                'nama' => 'Dewi Lestari',
                'tanggal_lahir' => '1995-03-25',
                'jenis_kelamin' => 'P',
                'berat_badan' => 55.0,
                'tinggi_badan' => 165.0,
                'tujuan' => 'Rehabilitas',
                'riwayat_kesehatan' => 'Pernah Cedera Lutut',
                'aktivitas_harian' => 'Yoga dan Pilates',
                'program_id' => 4,
                'skor_kebugaran' => 75.0,
            ],
        ]);
    }
}
