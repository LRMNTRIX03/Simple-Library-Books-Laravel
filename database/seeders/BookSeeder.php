<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
    [
        'title' => 'Pemrograman Web dengan PHP',
        'author' => 'Andi Prasetyo',
        'year' => 2021
    ],
    [
        'title' => 'Dasar-dasar Framework Laravel',
        'author' => 'Budi Santoso',
        'year' => 2023
    ],
    [
        'title' => 'Algoritma dan Struktur Data',
        'author' => 'Citra Handayani',
        'year' => 2020
    ],
    [
        'title' => 'Basis Data Relasional',
        'author' => 'Dewi Kartika',
        'year' => 2019
    ],
    [
        'title' => 'Jaringan Komputer dan Keamanan',
        'author' => 'Eko Wiratama',
        'year' => 2022
    ],
];

        foreach($data as $d){
            Books::create($d);
        }
    }
}
