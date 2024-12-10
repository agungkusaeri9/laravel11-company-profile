<?php

namespace Database\Seeders;

use App\Models\Pengaturan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengaturan::create([
            'nama_web' => 'UD. Mitra Jaya Konveksi',
            'deskripsi' => '-',
            'alamat' => '-',
            'email' => '-',
            'nomor_telepon' => '-',
            'nomor_wa' => '-',
            'link_facebook' => 'https://www.facebook.com/',
            'link_tiktok' => 'https://www.tiktok.com/',
            'link_instagram' => 'https://www.instagram.com/',
            'author' => '-'
        ]);
    }
}
