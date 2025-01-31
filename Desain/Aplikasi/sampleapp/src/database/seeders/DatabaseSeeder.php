<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call individual seeders

        // Seed users
        $this->seedUsers();

        // Additional seeders
        $this->call([ProgramSeeder::class]);
        $this->call([AnggotaSeeder::class]);
        $this->call([LatihanSeeder::class]);
        $this->call([EvaluasiKesehatanSeeder::class]);
        $this->call([PapanKlasemenSeeder::class]);
    }

    private function seedUsers(): void
    {
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $users = User::factory()->createmany([
                [
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'password' => bcrypt('password'),
                ],
                [
                    'name' => 'Anggota',
                    'email' => 'anggota@admin.com',
                    'password' => bcrypt('password'),
                ],
            ]);

            foreach ($users as $user) {
                if ($user->email == 'admin@admin.com') {
                    $user->assignRole('super_admin');
                    }
                }
            }
        }

    }