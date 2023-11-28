<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guru;
use App\Models\User;

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
        //     'nomor_telepon' => '085714683073',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Anida Rufaida',
        //     'tempat_lahir' => 'Tangerang',
        //     'tanggal_lahir' => '2004-02-10',
        //     'pendidikan' => 'SMA Kuliah',
        //     'jabatan' => 'Guru Kelas B2',
        //     'nomor_telepon' => '082113371073',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Ana Umi Jannati S. Pdi',
        //     'tempat_lahir' => 'Lampung',
        //     'tanggal_lahir' => '1992-03-10',
        //     'pendidikan' => 'S1',
        //     'jabatan' => 'Guru Kelas A',
        //     'nomor_telepon' => '089689814836',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Nining Setiawarni S. Pd',
        //     'tempat_lahir' => 'Tangerang',
        //     'tanggal_lahir' => '1975-08-26',
        //     'pendidikan' => 'S1',
        //     'jabatan' => 'Kepala Sekolah',
        //     'nomor_telepon' => '081380251978',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Jumeliyah',
        //     'tempat_lahir' => 'Tangerang',
        //     'tanggal_lahir' => '1973-09-12',
        //     'pendidikan' => 'S1',
        //     'jabatan' => 'Guru Kelas Play Group',
        //     'nomor_telepon' => '087722244843',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Ima Martini S. Pd',
        //     'tempat_lahir' => 'Tangerang',
        //     'tanggal_lahir' => '1978-08-28',
        //     'pendidikan' => 'S1',
        //     'jabatan' => 'Guru Kelas Main Peran',
        //     'nomor_telepon' => '081295633440',
        // ]);

        // Guru::factory()->create([
        //     'nama' => 'Didi Kusnadi',
        //     'tempat_lahir' => 'Pandeglang',
        //     'tanggal_lahir' => '1975-04-04',
        //     'pendidikan' => 'S1',
        //     'jabatan' => 'Ketua Yayasan',
        //     'nomor_telepon' => '08128511978',
        // ]);

        User::factory()->create([
            'name' => 'Jojo',
            'email' => 'jojo@gmail.com',
            'password' => '12345678',
            'usertype' => 'admin',
        ]);
    }
}
