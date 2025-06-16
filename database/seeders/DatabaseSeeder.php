<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin'), // Hash the password
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Jasa Sumur Bor Dalam & Dangkal',
                'photo' => 'product1.jpg',
                'description' => 'Survei lokasi, pengeboran, pemasangan pipa, dan instalasi pompa air untuk memompa air ke permukaan. Jasa pembuatan sumur bor Dangkal atau Dalam sesuai kebutuhan Anda dan keluarga',
            ],
            [
                'name' => 'Jasa Service Pompa Air & Sumur',
                'photo' => 'product2.jpg',
                'description' => 'Ada beberapa faktor kerusakan seperti: Kerusakan Motor, Korosi, Kerusakan pada Seal, Penyumbatan, Tekanan yang Tidak Stabil, Masalah Listrik atau Kontrol, Overheating dll.',
            ],
            [
                'name' => 'Jasa Perawatan Sumur',
                'photo' => 'product3.jpg',
                'description' => 'Jasa perawatan sumur meliputi: Pemeriksaan Rutin, Pembersihan Sumur, Penggantian Filter/Saringan, Pemeliharaan Pompa, Pengukuran Tingkat Air, Desinfeksi, Reparasi dan Pemeliharaan.',
            ]
        ]);

        DB::table('testimonis')->insert([
            [
                'name' => 'Andi Prasetyo',
                'photo' => 'images/testimonials/andi.jpg',
                'review' => 'Pelayanan sangat baik dan cepat. Sangat direkomendasikan!',
                'star' => 5,
            ],
            [
                'name' => 'Siti Nurhaliza',
                'photo' => 'images/testimonials/siti.jpg',
                'review' => 'Produk berkualitas tinggi, saya sangat puas!',
                'star' => 4,
            ],
            [
                'name' => 'Budi Santoso',
                'photo' => 'images/testimonials/budi.jpg',
                'review' => 'Pelayanan oke, cuma pengiriman agak lama.',
                'star' => 3,
            ],
        ]);
    }
}
