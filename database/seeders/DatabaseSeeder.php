<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Nilai;
use App\Models\Kriteria;
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
            'role' => 'admin',
            'nilai' => 1
        ]);

        Kriteria::Create([
            'nama_kriteria' => 'Wawancara',
            'bobot_kriteria' => 20,
        ]);

        Kriteria::Create([
            'nama_kriteria' => 'Latihan',
            'bobot_kriteria' => 30,
        ]);

        Kriteria::Create([
            'nama_kriteria' => 'Audisi',
            'bobot_kriteria' => 50,
        ]);

        User::Create([
            'nama' => 'Chyntia',
            'username' => 'chyntia',
            'password' => Hash::make('chyntia'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Lynda',
            'username' => 'lynda',
            'password' => Hash::make('lynda'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Aurel',
            'username' => 'aurel',
            'password' => Hash::make('aurel'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'April',
            'username' => 'april',
            'password' => Hash::make('april'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rena',
            'username' => 'rena',
            'password' => Hash::make('rena'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rangga',
            'username' => 'rangga',
            'password' => Hash::make('rangga'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Vio',
            'username' => 'vio',
            'password' => Hash::make('vio'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Dany',
            'username' => 'dany',
            'password' => Hash::make('dany'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Putra',
            'username' => 'putra',
            'password' => Hash::make('putra'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Akmal',
            'username' => 'akmal',
            'password' => Hash::make('akmal'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Hanif',
            'username' => 'hanif',
            'password' => Hash::make('hanif'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Sari',
            'username' => 'sari',
            'password' => Hash::make('sari'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Bayu',
            'username' => 'bayu',
            'password' => Hash::make('bayu'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Citra',
            'username' => 'citra',
            'password' => Hash::make('citra'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Nadia',
            'username' => 'nadia',
            'password' => Hash::make('nadia'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Hendra',
            'username' => 'hendra',
            'password' => Hash::make('hendra'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Umar',
            'username' => 'umar',
            'password' => Hash::make('umar'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Lina',
            'username' => 'lina',
            'password' => Hash::make('lina'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Dian',
            'username' => 'dian',
            'password' => Hash::make('dian'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Riana',
            'username' => 'riana',
            'password' => Hash::make('riana'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Kurnia',
            'username' => 'kurnia',
            'password' => Hash::make('kurnia'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rama',
            'username' => 'rama',
            'password' => Hash::make('rama'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Siska',
            'username' => 'siska',
            'password' => Hash::make('siska'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Kadek',
            'username' => 'kadek',
            'password' => Hash::make('kadek'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Aisyah',
            'username' => 'aisyah',
            'password' => Hash::make('aisyah'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Zainal',
            'username' => 'zainal',
            'password' => Hash::make('zainal'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Vera',
            'username' => 'vera',
            'password' => Hash::make('vera'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Tito',
            'username' => 'tito',
            'password' => Hash::make('tito'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Tika',
            'username' => 'tika',
            'password' => Hash::make('tika'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Gita',
            'username' => 'gita',
            'password' => Hash::make('gita'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Bagus',
            'username' => 'bagus',
            'password' => Hash::make('bagus'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Yani',
            'username' => 'yani',
            'password' => Hash::make('yani'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Prima',
            'username' => 'prima',
            'password' => Hash::make('prima'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Mahesa',
            'username' => 'mahesa',
            'password' => Hash::make('mahesa'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Novi',
            'username' => 'novi',
            'password' => Hash::make('novi'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Erwin',
            'username' => 'erwin',
            'password' => Hash::make('erwin'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Yanto',
            'username' => 'yanto',
            'password' => Hash::make('yanto'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Nanda',
            'username' => 'nanda',
            'password' => Hash::make('nanda'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Okta',
            'username' => 'okta',
            'password' => Hash::make('okta'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Indri',
            'username' => 'indri',
            'password' => Hash::make('indri'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rini',
            'username' => 'rini',
            'password' => Hash::make('rini'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Jelita',
            'username' => 'jelita',
            'password' => Hash::make('jelita'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Adi',
            'username' => 'adi',
            'password' => Hash::make('adi'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Zara',
            'username' => 'zara',
            'password' => Hash::make('zara'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Kusumo',
            'username' => 'kusumo',
            'password' => Hash::make('kusumo'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Lutfi',
            'username' => 'lutfi',
            'password' => Hash::make('lutfi'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Mira',
            'username' => 'mira',
            'password' => Hash::make('mira'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Fitri',
            'username' => 'fitri',
            'password' => Hash::make('fitri'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Oka',
            'username' => 'oka',
            'password' => Hash::make('oka'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rani',
            'username' => 'rani',
            'password' => Hash::make('rani'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Budi',
            'username' => 'budi',
            'password' => Hash::make('budi'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Vania',
            'username' => 'vania',
            'password' => Hash::make('vania'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Gilang',
            'username' => 'gilang',
            'password' => Hash::make('gilang'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Nila',
            'username' => 'nila',
            'password' => Hash::make('nila'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Aji',
            'username' => 'aji',
            'password' => Hash::make('aji'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Farah',
            'username' => 'farah',
            'password' => Hash::make('farah'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Yuni',
            'username' => 'yuni',
            'password' => Hash::make('yuni'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Dewi',
            'username' => 'dewi',
            'password' => Hash::make('dewi'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Reza',
            'username' => 'reza',
            'password' => Hash::make('reza'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Jaya',
            'username' => 'jaya',
            'password' => Hash::make('jaya'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Safira',
            'username' => 'safira',
            'password' => Hash::make('safira'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Aditya',
            'username' => 'aditya',
            'password' => Hash::make('aditya'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Candra',
            'username' => 'candra',
            'password' => Hash::make('candra'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Winda',
            'username' => 'winda',
            'password' => Hash::make('winda'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Dini',
            'username' => 'dini',
            'password' => Hash::make('dini'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Riani',
            'username' => 'riani',
            'password' => Hash::make('riani'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Anita',
            'username' => 'anita',
            'password' => Hash::make('anita'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Eko',
            'username' => 'eko',
            'password' => Hash::make('eko'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rina',
            'username' => 'rina',
            'password' => Hash::make('rina'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Indah',
            'username' => 'indah',
            'password' => Hash::make('indah'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Maulana',
            'username' => 'maulana',
            'password' => Hash::make('maulana'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Vina',
            'username' => 'vina',
            'password' => Hash::make('vina'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Tania',
            'username' => 'tania',
            'password' => Hash::make('tania'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Zulaikha',
            'username' => 'zulaikha',
            'password' => Hash::make('zulaikha'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Karina',
            'username' => 'karina',
            'password' => Hash::make('karina'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Fitria',
            'username' => 'fitria',
            'password' => Hash::make('fitria'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Ghalib',
            'username' => 'ghalib',
            'password' => Hash::make('ghalib'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Tari',
            'username' => 'tari',
            'password' => Hash::make('tari'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Andi',
            'username' => 'andi',
            'password' => Hash::make('andi'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Oki',
            'username' => 'oki',
            'password' => Hash::make('oki'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Citra',
            'username' => 'citra',
            'password' => Hash::make('citra'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rama',
            'username' => 'rama',
            'password' => Hash::make('rama'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Aisyah',
            'username' => 'aisyah',
            'password' => Hash::make('aisyah'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Kusuma',
            'username' => 'kusuma',
            'password' => Hash::make('kusuma'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Yanto',
            'username' => 'yanto',
            'password' => Hash::make('yanto'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Nita',
            'username' => 'nita',
            'password' => Hash::make('nita'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Kania',
            'username' => 'kania',
            'password' => Hash::make('kania'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Adinda',
            'username' => 'adinda',
            'password' => Hash::make('adinda'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Sakti',
            'username' => 'sakti',
            'password' => Hash::make('sakti'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Joko',
            'username' => 'joko',
            'password' => Hash::make('joko'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Candra',
            'username' => 'candra',
            'password' => Hash::make('candra'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Dian',
            'username' => 'dian',
            'password' => Hash::make('dian'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Vera',
            'username' => 'vera',
            'password' => Hash::make('vera'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Riani',
            'username' => 'riani',
            'password' => Hash::make('riani'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Sari',
            'username' => 'sari',
            'password' => Hash::make('sari'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Lila',
            'username' => 'lila',
            'password' => Hash::make('lila'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Zainal',
            'username' => 'zainal',
            'password' => Hash::make('zainal'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rena',
            'username' => 'rena',
            'password' => Hash::make('rena'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Rama',
            'username' => 'rama',
            'password' => Hash::make('rama'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);
        
        User::Create([
            'nama' => 'Zara',
            'username' => 'zara',
            'password' => Hash::make('zara'),
            'nim' => '0',
            'jurusan' => 'padusUtdi',
            'role' => 'anggota',
            'nilai' => 1
        ]);

        Nilai::Create([
            'user_id' => 2,
            'wawancara' => 61,
            'latihan' => 4,
            'audisi' => 83
        ]);
        
        Nilai::Create([
            'user_id' => 3,
            'wawancara' => 78,
            'latihan' => 5,
            'audisi' => 82
        ]);
        
        Nilai::Create([
            'user_id' => 4,
            'wawancara' => 89,
            'latihan' => 3,
            'audisi' => 94
        ]);
        
        Nilai::Create([
            'user_id' => 5,
            'wawancara' => 98,
            'latihan' => 5,
            'audisi' => 73
        ]);
        
        Nilai::Create([
            'user_id' => 6,
            'wawancara' => 85,
            'latihan' => 2,
            'audisi' => 67
        ]);
        
        Nilai::Create([
            'user_id' => 7,
            'wawancara' => 66,
            'latihan' => 1,
            'audisi' => 77
        ]);
        
        Nilai::Create([
            'user_id' => 8,
            'wawancara' => 79,
            'latihan' => 4,
            'audisi' => 75
        ]);
        
        Nilai::Create([
            'user_id' => 9,
            'wawancara' => 76,
            'latihan' => 5,
            'audisi' => 87
        ]);
        
        Nilai::Create([
            'user_id' => 10,
            'wawancara' => 88,
            'latihan' => 3,
            'audisi' => 45
        ]);
        
        Nilai::Create([
            'user_id' => 11,
            'wawancara' => 64,
            'latihan' => 2,
            'audisi' => 62
        ]);
        
        Nilai::Create([
            'user_id' => 12,
            'wawancara' => 81,
            'latihan' => 3,
            'audisi' => 29
        ]);
        
        Nilai::Create([
            'user_id' => 13,
            'wawancara' => 47,
            'latihan' => 1,
            'audisi' => 40
        ]);
        
        Nilai::Create([
            'user_id' => 14,
            'wawancara' => 48,
            'latihan' => 3,
            'audisi' => 68
        ]);
        
        Nilai::Create([
            'user_id' => 15,
            'wawancara' => 89,
            'latihan' => 4,
            'audisi' => 28
        ]);
        
        Nilai::Create([
            'user_id' => 16,
            'wawancara' => 37,
            'latihan' => 4,
            'audisi' => 50
        ]);
        
        Nilai::Create([
            'user_id' => 17,
            'wawancara' => 21,
            'latihan' => 1,
            'audisi' => 75
        ]);
        
        Nilai::Create([
            'user_id' => 18,
            'wawancara' => 29,
            'latihan' => 5,
            'audisi' => 31
        ]);
        
        Nilai::Create([
            'user_id' => 19,
            'wawancara' => 74,
            'latihan' => 2,
            'audisi' => 96
        ]);
        
        Nilai::Create([
            'user_id' => 20,
            'wawancara' => 41,
            'latihan' => 2,
            'audisi' => 60
        ]);
        
        Nilai::Create([
            'user_id' => 21,
            'wawancara' => 81,
            'latihan' => 3,
            'audisi' => 25
        ]);
        
        Nilai::Create([
            'user_id' => 22,
            'wawancara' => 93,
            'latihan' => 1,
            'audisi' => 92
        ]);
        
        Nilai::Create([
            'user_id' => 23,
            'wawancara' => 69,
            'latihan' => 1,
            'audisi' => 84
        ]);
        
        Nilai::Create([
            'user_id' => 24,
            'wawancara' => 97,
            'latihan' => 1,
            'audisi' => 33
        ]);
        
        Nilai::Create([
            'user_id' => 25,
            'wawancara' => 59,
            'latihan' => 2,
            'audisi' => 95
        ]);
        
        Nilai::Create([
            'user_id' => 26,
            'wawancara' => 35,
            'latihan' => 4,
            'audisi' => 69
        ]);
        
        Nilai::Create([
            'user_id' => 27,
            'wawancara' => 87,
            'latihan' => 1,
            'audisi' => 61
        ]);
        
        Nilai::Create([
            'user_id' => 28,
            'wawancara' => 28,
            'latihan' => 5,
            'audisi' => 35
        ]);
        
        Nilai::Create([
            'user_id' => 29,
            'wawancara' => 36,
            'latihan' => 1,
            'audisi' => 30
        ]);
        
        Nilai::Create([
            'user_id' => 30,
            'wawancara' => 41,
            'latihan' => 3,
            'audisi' => 84
        ]);
        
        Nilai::Create([
            'user_id' => 31,
            'wawancara' => 56,
            'latihan' => 3,
            'audisi' => 65
        ]);
        
        Nilai::Create([
            'user_id' => 32,
            'wawancara' => 75,
            'latihan' => 2,
            'audisi' => 35
        ]);
        
        Nilai::Create([
            'user_id' => 33,
            'wawancara' => 31,
            'latihan' => 3,
            'audisi' => 88
        ]);
        
        Nilai::Create([
            'user_id' => 34,
            'wawancara' => 54,
            'latihan' => 5,
            'audisi' => 58
        ]);
        
        Nilai::Create([
            'user_id' => 35,
            'wawancara' => 69,
            'latihan' => 5,
            'audisi' => 31
        ]);
        
        Nilai::Create([
            'user_id' => 36,
            'wawancara' => 23,
            'latihan' => 4,
            'audisi' => 71
        ]);
        
        Nilai::Create([
            'user_id' => 37,
            'wawancara' => 83,
            'latihan' => 2,
            'audisi' => 31
        ]);
        
        Nilai::Create([
            'user_id' => 38,
            'wawancara' => 28,
            'latihan' => 2,
            'audisi' => 34
        ]);
        
        Nilai::Create([
            'user_id' => 39,
            'wawancara' => 70,
            'latihan' => 5,
            'audisi' => 36
        ]);
        
        Nilai::Create([
            'user_id' => 40,
            'wawancara' => 63,
            'latihan' => 3,
            'audisi' => 37
        ]);
        
        Nilai::Create([
            'user_id' => 41,
            'wawancara' => 50,
            'latihan' => 4,
            'audisi' => 45
        ]);
        
        Nilai::Create([
            'user_id' => 42,
            'wawancara' => 50,
            'latihan' => 2,
            'audisi' => 77
        ]);
        
        Nilai::Create([
            'user_id' => 43,
            'wawancara' => 97,
            'latihan' => 1,
            'audisi' => 29
        ]);
        
        Nilai::Create([
            'user_id' => 44,
            'wawancara' => 75,
            'latihan' => 3,
            'audisi' => 100
        ]);
        
        Nilai::Create([
            'user_id' => 45,
            'wawancara' => 61,
            'latihan' => 5,
            'audisi' => 45
        ]);
        
        Nilai::Create([
            'user_id' => 46,
            'wawancara' => 91,
            'latihan' => 5,
            'audisi' => 55
        ]);
        
        Nilai::Create([
            'user_id' => 47,
            'wawancara' => 52,
            'latihan' => 1,
            'audisi' => 36
        ]);
        
        Nilai::Create([
            'user_id' => 48,
            'wawancara' => 84,
            'latihan' => 5,
            'audisi' => 44
        ]);
        
        Nilai::Create([
            'user_id' => 49,
            'wawancara' => 94,
            'latihan' => 1,
            'audisi' => 56
        ]);
        
        Nilai::Create([
            'user_id' => 50,
            'wawancara' => 63,
            'latihan' => 1,
            'audisi' => 88
        ]);
        
        Nilai::Create([
            'user_id' => 51,
            'wawancara' => 87,
            'latihan' => 1,
            'audisi' => 54
        ]);
        
        Nilai::Create([
            'user_id' => 52,
            'wawancara' => 35,
            'latihan' => 5,
            'audisi' => 52
        ]);
        
        Nilai::Create([
            'user_id' => 53,
            'wawancara' => 77,
            'latihan' => 4,
            'audisi' => 100
        ]);
        
        Nilai::Create([
            'user_id' => 54,
            'wawancara' => 23,
            'latihan' => 4,
            'audisi' => 53
        ]);
        
        Nilai::Create([
            'user_id' => 55,
            'wawancara' => 87,
            'latihan' => 5,
            'audisi' => 23
        ]);
        
        Nilai::Create([
            'user_id' => 56,
            'wawancara' => 34,
            'latihan' => 1,
            'audisi' => 95
        ]);
        
        Nilai::Create([
            'user_id' => 57,
            'wawancara' => 60,
            'latihan' => 5,
            'audisi' => 72
        ]);
        
        Nilai::Create([
            'user_id' => 58,
            'wawancara' => 66,
            'latihan' => 3,
            'audisi' => 77
        ]);
        
        Nilai::Create([
            'user_id' => 59,
            'wawancara' => 21,
            'latihan' => 2,
            'audisi' => 65
        ]);
        
        Nilai::Create([
            'user_id' => 60,
            'wawancara' => 47,
            'latihan' => 2,
            'audisi' => 85
        ]);
        
        Nilai::Create([
            'user_id' => 61,
            'wawancara' => 21,
            'latihan' => 5,
            'audisi' => 46
        ]);
        
        Nilai::Create([
            'user_id' => 62,
            'wawancara' => 60,
            'latihan' => 2,
            'audisi' => 22
        ]);
        
        Nilai::Create([
            'user_id' => 63,
            'wawancara' => 21,
            'latihan' => 4,
            'audisi' => 59
        ]);
        
        Nilai::Create([
            'user_id' => 64,
            'wawancara' => 31,
            'latihan' => 4,
            'audisi' => 75
        ]);
        
        Nilai::Create([
            'user_id' => 65,
            'wawancara' => 29,
            'latihan' => 2,
            'audisi' => 24
        ]);
        
        Nilai::Create([
            'user_id' => 66,
            'wawancara' => 89,
            'latihan' => 3,
            'audisi' => 53
        ]);
        
        Nilai::Create([
            'user_id' => 67,
            'wawancara' => 79,
            'latihan' => 3,
            'audisi' => 51
        ]);
        
        Nilai::Create([
            'user_id' => 68,
            'wawancara' => 88,
            'latihan' => 4,
            'audisi' => 98
        ]);
        
        Nilai::Create([
            'user_id' => 69,
            'wawancara' => 51,
            'latihan' => 1,
            'audisi' => 79
        ]);
        
        Nilai::Create([
            'user_id' => 70,
            'wawancara' => 35,
            'latihan' => 2,
            'audisi' => 77
        ]);
        
        Nilai::Create([
            'user_id' => 71,
            'wawancara' => 67,
            'latihan' => 5,
            'audisi' => 77
        ]);
        
        Nilai::Create([
            'user_id' => 72,
            'wawancara' => 32,
            'latihan' => 5,
            'audisi' => 83
        ]);
        
        Nilai::Create([
            'user_id' => 73,
            'wawancara' => 98,
            'latihan' => 1,
            'audisi' => 92
        ]);
        
        Nilai::Create([
            'user_id' => 74,
            'wawancara' => 62,
            'latihan' => 5,
            'audisi' => 41
        ]);
        
        Nilai::Create([
            'user_id' => 75,
            'wawancara' => 97,
            'latihan' => 3,
            'audisi' => 63
        ]);
        
        Nilai::Create([
            'user_id' => 76,
            'wawancara' => 28,
            'latihan' => 5,
            'audisi' => 22
        ]);
        
        Nilai::Create([
            'user_id' => 77,
            'wawancara' => 82,
            'latihan' => 3,
            'audisi' => 28
        ]);
        
        Nilai::Create([
            'user_id' => 78,
            'wawancara' => 78,
            'latihan' => 5,
            'audisi' => 56
        ]);
        
        Nilai::Create([
            'user_id' => 79,
            'wawancara' => 36,
            'latihan' => 5,
            'audisi' => 62
        ]);
        
        Nilai::Create([
            'user_id' => 80,
            'wawancara' => 65,
            'latihan' => 4,
            'audisi' => 54
        ]);
        
        Nilai::Create([
            'user_id' => 81,
            'wawancara' => 32,
            'latihan' => 2,
            'audisi' => 37
        ]);
        
        Nilai::Create([
            'user_id' => 82,
            'wawancara' => 77,
            'latihan' => 2,
            'audisi' => 95
        ]);
        
        Nilai::Create([
            'user_id' => 83,
            'wawancara' => 20,
            'latihan' => 5,
            'audisi' => 45
        ]);
        
        Nilai::Create([
            'user_id' => 84,
            'wawancara' => 49,
            'latihan' => 3,
            'audisi' => 87
        ]);
        
        Nilai::Create([
            'user_id' => 85,
            'wawancara' => 58,
            'latihan' => 5,
            'audisi' => 47
        ]);
        
        Nilai::Create([
            'user_id' => 86,
            'wawancara' => 57,
            'latihan' => 2,
            'audisi' => 78
        ]);
        
        Nilai::Create([
            'user_id' => 87,
            'wawancara' => 61,
            'latihan' => 5,
            'audisi' => 91
        ]);
        
        Nilai::Create([
            'user_id' => 88,
            'wawancara' => 25,
            'latihan' => 4,
            'audisi' => 25
        ]);
        
        Nilai::Create([
            'user_id' => 89,
            'wawancara' => 21,
            'latihan' => 1,
            'audisi' => 77
        ]);
        
        Nilai::Create([
            'user_id' => 90,
            'wawancara' => 64,
            'latihan' => 1,
            'audisi' => 79
        ]);
        
        Nilai::Create([
            'user_id' => 91,
            'wawancara' => 97,
            'latihan' => 1,
            'audisi' => 27
        ]);
        
        Nilai::Create([
            'user_id' => 92,
            'wawancara' => 75,
            'latihan' => 3,
            'audisi' => 73
        ]);
        
        Nilai::Create([
            'user_id' => 93,
            'wawancara' => 67,
            'latihan' => 5,
            'audisi' => 29
        ]);
        
        Nilai::Create([
            'user_id' => 94,
            'wawancara' => 87,
            'latihan' => 2,
            'audisi' => 43
        ]);
        
        Nilai::Create([
            'user_id' => 95,
            'wawancara' => 67,
            'latihan' => 5,
            'audisi' => 69
        ]);
        
        Nilai::Create([
            'user_id' => 96,
            'wawancara' => 63,
            'latihan' => 1,
            'audisi' => 85
        ]);
        
        Nilai::Create([
            'user_id' => 97,
            'wawancara' => 31,
            'latihan' => 1,
            'audisi' => 60
        ]);
        
        Nilai::Create([
            'user_id' => 98,
            'wawancara' => 42,
            'latihan' => 3,
            'audisi' => 97
        ]);
        
        Nilai::Create([
            'user_id' => 99,
            'wawancara' => 52,
            'latihan' => 4,
            'audisi' => 29
        ]);
        
        Nilai::Create([
            'user_id' => 100,
            'wawancara' => 22,
            'latihan' => 1,
            'audisi' => 82
        ]);
        
        Nilai::Create([
            'user_id' => 101,
            'wawancara' => 61,
            'latihan' => 1,
            'audisi' => 74
        ]);
    }
}
