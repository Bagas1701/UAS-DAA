<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluasiKesehatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('evaluasi_kesehatans')->insert([
            [
                'anggota_id' => 1,
                'bmi' => 24.49,
                'vo2_max' => 35.0,
                'kekuatan_otot' => 70.0,
                'fleksibilitas' => 15.0,
                'daya_tahan_kardiovaskular' => 40.0,
                'tanggal_evaluasi' => '2025-01-15',
            ],
            [
                'anggota_id' => 2,
                'bmi' => 23.44,
                'vo2_max' => 32.0,
                'kekuatan_otot' => 65.0,
                'fleksibilitas' => 18.0,
                'daya_tahan_kardiovaskular' => 42.0,
                'tanggal_evaluasi' => '2025-01-15',
            ],
            [
                'anggota_id' => 3,
                'bmi' => 26.23,
                'vo2_max' => 40.0,
                'kekuatan_otot' => 80.0,
                'fleksibilitas' => 20.0,
                'daya_tahan_kardiovaskular' => 45.0,
                'tanggal_evaluasi' => '2025-01-15',
            ],
            [
                'anggota_id' => 4,
                'bmi' => 20.21,
                'vo2_max' => 30.0,
                'kekuatan_otot' => 60.0,
                'fleksibilitas' => 22.0,
                'daya_tahan_kardiovaskular' => 38.0,
                'tanggal_evaluasi' => '2025-01-15',
            ],
        ]);
    }
}
