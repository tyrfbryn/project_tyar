<?php

namespace Database\Seeders;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert(
            [
                'nama' => 'Agung Wahyudi',
                'kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat' => 'JL. cibay',
            ]
            );
            Siswa::insert(
                [
                    'nama' => 'Tyar febriyano',
                    'kelas' => 'XI RPL 2',
                    'jenis_kelamin' => 0,
                    'alamat' => 'Dayeuhkolot',
                ]
                );
                Siswa::insert(
                    [
                        'nama' => 'Rasya Prima',
                        'kelas' => 'XI RPL 2',
                        'jenis_kelamin' => 0,
                        'alamat' => 'Inhoftank',
                    ]
                    );
    }
}
