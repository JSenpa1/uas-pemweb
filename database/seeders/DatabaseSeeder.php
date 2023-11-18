<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Ratih Heliyani. S. Pdi',
        //     'tempat_lahir' => 'Lampung',
        //     'tanggal_lahir' => '1983-12-12',
        //     'pendidikan' => 'S1',
        //     'jabatan' => 'Guru Kelas B1',
        //     'nomor_telepon' => '+085714683073',
        // ]);

        Guru::factory()->create([
            'nama' => 'Anida Rufaida',
            'tempat_lahir' => 'Tangerang',
            'tanggal_lahir' => '2004-02-',
            'pendidikan' => 'S1',
            'jabatan' => 'Guru Kelas B1',
            'nomor_telepon' => '+085714683073',
        ]);

        Guru::factory()->create([
            'nama' => 'Ratih Heliyani. S. Pdi',
            'tempat_lahir' => 'Lampung',
            'tanggal_lahir' => '1983-12-12',
            'pendidikan' => 'S1',
            'jabatan' => 'Guru Kelas B1',
            'nomor_telepon' => '+085714683073',
        ]);

        Guru::factory()->create([
            'nama' => 'Ratih Heliyani. S. Pdi',
            'tempat_lahir' => 'Lampung',
            'tanggal_lahir' => '1983-12-12',
            'pendidikan' => 'S1',
            'jabatan' => 'Guru Kelas B1',
            'nomor_telepon' => '+085714683073',
        ]);

        Guru::factory()->create([
            'nama' => 'Ratih Heliyani. S. Pdi',
            'tempat_lahir' => 'Lampung',
            'tanggal_lahir' => '1983-12-12',
            'pendidikan' => 'S1',
            'jabatan' => 'Guru Kelas B1',
            'nomor_telepon' => '+085714683073',
        ]);
    }
}
