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
            'email' => 'beningjayasumurbor@gmail.com',
            'password' => bcrypt('admin'), // Hash the password
        ]);

        DB::table('products')->insert([
            [
                'name' => 'Deep & Shallow Bore Well Services',
                'photo' => 'product1.jpg',
                'description' => 'Site survey, drilling, pipe installation, and water pump setup to draw water to the surface. We offer shallow or deep bore well construction services tailored to your household needs.',
            ],
            [
                'name' => 'Water Pump & Well Repair Services',
                'photo' => 'product2.jpg',
                'description' => 'Common issues include: motor failure, corrosion, seal damage, clogs, unstable pressure, electrical/control problems, overheating, and more.',
            ],
            [
                'name' => 'Well Maintenance Services',
                'photo' => 'product3.jpg',
                'description' => 'Well maintenance includes: routine inspection, well cleaning, filter replacement, pump maintenance, water level checks, disinfection, and repair work.',
            ]
        ]);

        DB::table('testimonis')->insert([
            [
                'name' => 'Made Budi',
                'photo' => 'images/testimonials/made.jpg',
                'review' => 'Saya sangat puas dengan pelayanan pengeboran sumur dari CV Bening Jaya. Timnya datang tepat waktu dan sangat profesional. Mereka menjelaskan setiap prosesnya dengan jelas dan bekerja dengan rapi. Sekarang air di rumah saya lancar dan jernih. Terima kasih!	',
                'star' => 5,
            ],
            [
                'name' => 'Komang Jaya',
                'photo' => 'images/testimonials/komang.jpg',
                'review' => 'Bukan cuma bor sumur, mereka juga bantu pasang pompa dan pipa instalasi. Setelah beberapa minggu, saya tanya soal tekanan air dan mereka langsung datang bantu cek ulang tanpa biaya tambahan. Pelayanannya luar biasa.',
                'star' => 5,
            ],
            [
                'name' => 'Mita',
                'photo' => 'images/testimonials/mita.jpg',
                'review' => 'Pengerjaan sumur bor di rumah saya hanya memakan waktu 2 hari. Prosesnya cepat tapi tetap teliti. Hasil air bersih dan debitnya kencang. Setelah selesai, area kerja dibersihkan kembali. Sangat direkomendasikan!',
                'star' => 5,
            ],
        ]);
    }
}
