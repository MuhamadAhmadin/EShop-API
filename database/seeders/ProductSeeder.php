<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Macbook Air M1 256GB',
                'description' => 'Laptop Apple yang paling tipis dan ringan, bertenaga super dengan chip Apple M1. Tuntaskan berbagai proyek Anda dengan CPU 8-core super cepat. Tingkatkan aplikasi dan game kaya grafis ke level lebih tinggi dengan GPU hingga 8-core. Dan percepat tugas pembelajaran mesin dengan Neural Engine 16-core. Semua dengan desain senyap tanpa kipas dan kekuatan baterai paling tahan lama — hingga 18 jam. (2) MacBook Air. Tetap portabel yang sempurna. Jauh lebih bertenaga.',
                'image_url' => 'https://cf.shopee.co.id/file/f0f0ceaefb5b2a91ba9cd9d39978591c',
                'price' => 19000000
            ],
            [
                'name' => 'Apple iPhone 11 Pro 512GB, Midnight Green',
                'description' => 'Rekam video dan foto yang memukau dengan kamera Ultra Wide, Wide, dan Telefoto. Ambil foto berpencahayaan rendah terbaik dengan mode Malam. Tonton film dan acara HDR di layar Super Retina XDR —layar iPhone paling cerah yang pernah ada. Nikmati performa tak tertandingi dengan A13 Bionic untuk game, augmented reality (AR), dan fotografi. Dapatkan kekuatan baterai sepanjang hari1 dan level ketahanan air baru.(2)Semuanya dalam iPhone pertama yang karena kecanggihannya layak disebut Pro.',
                'image_url' => 'https://cf.shopee.co.id/file/03fe7e408acc2ef838ac3899897c2387',
                'price' => 18000000
            ],
            [
                'name' => 'Apple Watch SE (Gen2) 40mm GPS, Starlight, Aluminium Case with Starlight Sport Band',
                'description' => '
                Fitur esensial untuk membantu Anda tetap terhubung, aktif, sehat, dan aman.',
                'image_url' => 'https://cf.shopee.co.id/file/sg-11134201-22110-2kya6pt4opjvb9',
                'price' => 5000000
            ],
        ];

        DB::table('products')->insert($data);
    }
}
