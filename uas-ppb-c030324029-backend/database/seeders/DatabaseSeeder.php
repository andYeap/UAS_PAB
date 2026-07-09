<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::create([
            'name' => 'Ahmad Dani',
            'nim' => 'C030324029',
            'email' => 'ahmaddani@poliban.ac.id',
            'no_hp' => '0812555001',
            'program_studi' => 'Teknik Informatika',
            'kelas' => '3A TI',
            'status' => 'Mahasiswa Aktif',
            'password' => bcrypt('password'),
        ]);
    }
}
