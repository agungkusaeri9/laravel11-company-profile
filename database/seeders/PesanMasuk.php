<?php

namespace Database\Seeders;

use App\Models\PesanMasuk as ModelsPesanMasuk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesanMasuk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsPesanMasuk::create([
            'nama' => 'Agus',
            'email' => 'agus@gmail.com',
            'subjek' => 'Tampilan Web',
            'pesan' => 'Mohon diperbaiki lagi tampilannya lebih bagus lagi'
        ]);
    }
}
