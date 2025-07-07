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
                'name' => 'Jasa Sumur Bor Dalam & Dangkal',
                'photo' => 'product1.jpg',
                'description' => 'Kami menyediakan layanan pengeboran sumur dalam dan dangkal yang profesional dan terpercaya untuk memenuhi kebutuhan air bersih Anda dan keluarga. Layanan ini mencakup survei lokasi secara menyeluruh, pengeboran tanah menggunakan peralatan modern, pemasangan pipa berkualitas, serta instalasi pompa air agar air dapat disalurkan dengan lancar ke permukaan. Dengan pengalaman dan teknisi ahli di bidangnya, kami siap menghadirkan solusi sumur yang efisien, tahan lama, dan disesuaikan dengan kondisi geografis serta kebutuhan Anda. Dapatkan pasokan air bersih yang stabil dan aman, hanya bersama Bening Jaya!',
            ],
            [
                'name' => 'Jasa Service Pompa Air & Sumur',
                'photo' => 'product2.jpg',
                'description' => 'Masalah pada pompa air atau sumur Anda? Kami hadir dengan solusi cepat dan tepat untuk berbagai kerusakan seperti motor rusak, korosi, seal bocor, penyumbatan aliran, tekanan air yang tidak stabil, hingga gangguan listrik dan overheating. Layanan service kami dilakukan oleh teknisi berpengalaman yang siap mengevaluasi dan memperbaiki permasalahan secara menyeluruh. Kami memastikan setiap perbaikan dilakukan dengan komponen terbaik agar pompa dan sistem sumur Anda kembali bekerja optimal. Jangan biarkan kerusakan kecil berubah menjadi besar—percayakan pada kami untuk perawatan dan service terbaik!',
            ],
            [
                'name' => 'Jasa Perawatan Sumur',
                'photo' => 'product3.jpg',
                'description' => 'Perawatan sumur secara rutin sangat penting untuk menjaga kualitas air dan kinerja sistem secara keseluruhan. Kami menawarkan layanan lengkap meliputi pemeriksaan berkala, pembersihan sumur dari kotoran dan endapan, penggantian filter atau saringan, perawatan pompa, pengecekan tingkat air, serta desinfeksi untuk menjamin air tetap higienis. Dengan perawatan yang tepat, umur pemakaian sumur menjadi lebih panjang dan efisiensi sistem tetap terjaga. Jadikan sumur Anda selalu dalam kondisi prima dengan layanan profesional dari Bening Jaya!',
            ]
        ]);

        // DB::table('testimonis')->insert([
        //     [
        //         'name' => 'Made Budi',
        //         'photo' => 'images/testimonials/made.jpg',
        //         'review' => 'Saya sangat puas dengan pelayanan pengeboran sumur dari CV Bening Jaya. Timnya datang tepat waktu dan sangat profesional. Mereka menjelaskan setiap prosesnya dengan jelas dan bekerja dengan rapi. Sekarang air di rumah saya lancar dan jernih. Terima kasih!	',
        //         'star' => 5,
        //     ],
        //     [
        //         'name' => 'Komang Jaya',
        //         'photo' => 'images/testimonials/komang.jpg',
        //         'review' => 'Bukan cuma bor sumur, mereka juga bantu pasang pompa dan pipa instalasi. Setelah beberapa minggu, saya tanya soal tekanan air dan mereka langsung datang bantu cek ulang tanpa biaya tambahan. Pelayanannya luar biasa.',
        //         'star' => 5,
        //     ],
        //     [
        //         'name' => 'Mita',
        //         'photo' => 'images/testimonials/mita.jpg',
        //         'review' => 'Pengerjaan sumur bor di rumah saya hanya memakan waktu 2 hari. Prosesnya cepat tapi tetap teliti. Hasil air bersih dan debitnya kencang. Setelah selesai, area kerja dibersihkan kembali. Sangat direkomendasikan!',
        //         'star' => 5,
        //     ],
        // ]);
    }
}
