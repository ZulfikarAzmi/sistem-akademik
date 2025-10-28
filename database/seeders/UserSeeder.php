<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Test',
                'email' => 'admin@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'), // password: admin123
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dosen Test',
                'email' => 'dosen@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('dosen123'), // password: dosen123
                'role' => 'dosen',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mahasiswa Test',
                'email' => 'mahasiswa@test.com',
                'email_verified_at' => now(),
                'password' => Hash::make('mahasiswa123'), // password: mahasiswa123
                'role' => 'mahasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
