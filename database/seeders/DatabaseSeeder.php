<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'nip' => '01010101',
                'pic' => '12345678',
                'nama' => 'ADE',
                'fakultas' => 'Sastra Teknik',
                'profile_img' => 'profile.jpg',
                'role' => 'mahasiswa',
            ], [
                'nip' => '02020202',
                'pic' => '12345678',
                'nama' => 'Aprizal Daffa Excel',
                'fakultas' => 'Sastra Teknik',
                'profile_img' => 'profile.jpg',
                'role' => 'dosen',
            ]
        ]);
    }
}
