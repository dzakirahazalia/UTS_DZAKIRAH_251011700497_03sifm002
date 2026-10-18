<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movies')->insert([
            [
                'title' => 'Agak Laen',
                'genre' => 'Komedi, Horor',
                'duration' => 119,
                'release_year' => 2024,
                'description' => 'Empat sahabat yang bekerja di rumah hantu menghadapi kejadian tak terduga.',
                'poster' => 'agak-laen.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'KKN di Desa Penari',
                'genre' => 'Horor, Misteri',
                'duration' => 130,
                'release_year' => 2022,
                'description' => 'Sekelompok mahasiswa menjalani kegiatan KKN di sebuah desa yang menyimpan misteri.',
                'poster' => 'kkn-desa-penari.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laskar Pelangi',
                'genre' => 'Drama, Keluarga',
                'duration' => 125,
                'release_year' => 2008,
                'description' => 'Perjuangan anak-anak Belitung untuk mendapatkan pendidikan dan meraih cita-cita.',
                'poster' => 'laskar-pelangi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Miracle in Cell No. 7',
                'genre' => 'Drama, Keluarga',
                'duration' => 145,
                'release_year' => 2022,
                'description' => 'Kisah kasih sayang seorang ayah kepada putrinya yang penuh haru.',
                'poster' => 'miracle-cell-7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Petualangan Sherina 2',
                'genre' => 'Petualangan, Musikal',
                'duration' => 126,
                'release_year' => 2023,
                'description' => 'Sherina dan Sadam kembali bertemu dalam petualangan yang penuh tantangan.',
                'poster' => 'petualangan-sherina-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
