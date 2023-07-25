<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::Create([
            'nama' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'nim' => '000000000',
            'jurusan' => 'padusUtdi',
            'role' => 'admin'
        ]);

        Kriteria::Create([
            'nama_kriteria' => 'Wawancara',
            'bobot_kriteria' => 20
        ]);
        
        Kriteria::Create([
            'nama_kriteria' => 'Latihan',
            'bobot_kriteria' => 30
        ]);
        
        Kriteria::Create([
            'nama_kriteria' => 'Audisi',
            'bobot_kriteria' => 50
        ]);
    }
}
