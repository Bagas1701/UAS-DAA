<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PapanKlasemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('papan_klasemens')->insert([
            [
                'anggota_id' => 1,
                'skor' => 80.5,
                'peringkat' => '3',
                'status' => 'Berhasil',
            ],
            [
                'anggota_id' => 2,
                'skor' => 85.0,
                'peringkat' => '2',
                'status' => 'Berhasil',
            ],
            [
                'anggota_id' => 3,
                'skor' => 90.0,
                'peringkat' => '1',
                'status' => 'Berhasil',
            ],
            [
                'anggota_id' => 4,
                'skor' => 75.0,
                'peringkat' => '4',
                'status' => 'Butuh Bimbingan',
            ],
        ]);
    }
}
