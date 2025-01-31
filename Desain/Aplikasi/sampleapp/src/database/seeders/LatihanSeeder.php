<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('latihans')->insert([
            [
                'anggota_id' => 1,
                'tanggal' => '2025-01-11',
                'waktu' => '07:00:00',
                'aktivitas' => 'Lari pagi',
                'durasi' => '30 menit',
            ],
            [
                'anggota_id' => 1,
                'tanggal' => '2025-01-13',
                'waktu' => '18:00:00',
                'aktivitas' => 'Senam',
                'durasi' => '45 menit',
            ],
            [
                'anggota_id' => 2,
                'tanggal' => '2025-01-12',
                'waktu' => '06:30:00',
                'aktivitas' => 'Yoga',
                'durasi' => '60 menit',
            ],
            [
                'anggota_id' => 3,
                'tanggal' => '2025-01-11',
                'waktu' => '17:00:00',
                'aktivitas' => 'Angkat Beban',
                'durasi' => '90 menit',
            ],
            [
                'anggota_id' => 4,
                'tanggal' => '2025-01-14',
                'waktu' => '08:00:00',
                'aktivitas' => 'Pilates',
                'durasi' => '50 menit',
            ],
        ]);
    }
}
