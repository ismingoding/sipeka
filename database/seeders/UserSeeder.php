<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin staf kelurahan
        User::create([
            'nama' => 'Admin Kelurahan',
            'email' => 'admin@bukitdatuk.id',
            'username' => 'admin',
            'password' => Hash::make('password123'),
            'alamat' => 'Jl. Bukit Datuk No.1',
            'jenis_kelamin' => 'laki laki',
            'tanggal_lahir' => '1990-01-01',
            'no_hp' => '081234567890',
            'role' => 'staf_kelurahan',
        ]);

        // Warga biasa
        User::create([
            'nama' => 'Warga Contoh',
            'email' => 'warga@bukitdatuk.id',
            'username' => 'warga',
            'password' => Hash::make('password123'),
            'alamat' => 'Jl. Contoh No.2',
            'jenis_kelamin' => 'perempuan',
            'tanggal_lahir' => '1995-05-05',
            'no_hp' => '089876543210',
            'role' => 'warga',
        ]);
    }
}
