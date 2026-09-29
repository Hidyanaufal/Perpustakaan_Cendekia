<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::insert([
            [
                'nis' => '2471001',
                'nama' => 'Ahmad Fauzan',
                'kelas' => 'XII RPL 1',
                'alamat' => 'Semarang',
                'no_telp' => '081234567801',
            ],
            [
                'nis' => '2471002',
                'nama' => 'Budi Santoso',
                'kelas' => 'XII RPL 1',
                'alamat' => 'Semarang',
                'no_telp' => '081234567802',
            ],
            [
                'nis' => '2471003',
                'nama' => 'Citra Lestari',
                'kelas' => 'XII RPL 1',
                'alamat' => 'Semarang',
                'no_telp' => '081234567803',
            ],
            [
                'nis' => '2471004',
                'nama' => 'Dimas Pratama',
                'kelas' => 'XII RPL 2',
                'alamat' => 'Semarang',
                'no_telp' => '081234567804',
            ],
            [
                'nis' => '2471005',
                'nama' => 'Eka Putri',
                'kelas' => 'XII RPL 2',
                'alamat' => 'Semarang',
                'no_telp' => '081234567805',
            ],
            [
                'nis' => '2471006',
                'nama' => 'Fajar Ramadhan',
                'kelas' => 'XII RPL 2',
                'alamat' => 'Semarang',
                'no_telp' => '081234567806',
            ],
            [
                'nis' => '2471007',
                'nama' => 'Gilang Saputra',
                'kelas' => 'XII RPL 3',
                'alamat' => 'Semarang',
                'no_telp' => '081234567807',
            ],
            [
                'nis' => '2471008',
                'nama' => 'Hana Aulia',
                'kelas' => 'XII RPL 3',
                'alamat' => 'Semarang',
                'no_telp' => '081234567808',
            ],
            [
                'nis' => '2471009',
                'nama' => 'Indra Wijaya',
                'kelas' => 'XII RPL 3',
                'alamat' => 'Semarang',
                'no_telp' => '081234567809',
            ],
            [
                'nis' => '2471010',
                'nama' => 'Jihan Maharani',
                'kelas' => 'XII RPL 3',
                'alamat' => 'Semarang',
                'no_telp' => '081234567810',
            ],
        ]);
    }
}