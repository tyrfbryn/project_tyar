<?php

namespace Database\Seeders;
use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Sekolah::insert(
            [
                'nama' => 'smkn3',
                'alamat' => 'buahbatu',
                'email' => 'smkn3@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'smk telkom',
                'alamat' => 'batununggal',
                'email' => 'telkom123@gmail.com',
                'tlp' => '087625',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'smk assalaam',
                'alamat' => 'tarate',
                'email' => 'smkassalaam123@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'smkn4',
                'alamat' => 'buahbatu',
                'email' => 'smkn4123@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            ); 
        Sekolah::insert(
            [
                'nama' => 'smk pi',
                'alamat' => 'inhoftank',
                'email' => 'smk@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'mtssirnamiskin',
                'alamat' => 'kopo',
                'email' => 'rasyaprima123@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'ma marhadiuyah',
                'alamat' => 'inhoftank',
                'email' => 'smk alamanah@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'smk7',
                'alamat' => 'gatot',
                'email' => 'smk7@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'bpi',
                'alamat' => 'burangrang',
                'email' => 'smkbpi@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
            );
        Sekolah::insert(
            [
                'nama' => 'mts nurul iman',
                'alamat' => 'inhoftank',
                'email' => 'nuruliman@gmail.com',
                'tlp' => '081234',
                'status' => 1,
            ]
           );
    }
}
