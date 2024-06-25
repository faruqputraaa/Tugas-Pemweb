<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Items;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'user_id' => 1,
                'title' => 'Botol Plastik',
                'type' => 'Plastik',
                'description' => 'Botol plastik bekas minuman.',
                'image_path' => 'images/items/botol_plastik.jpg',
                'weight' => 0.5,
                'price' => 2000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Kertas Bekas',
                'type' => 'Kertas',
                'description' => 'Kertas bekas kantor.',
                'image_path' => 'images/items/kertas_bekas.jpg',
                'weight' => 2.0,
                'price' => 5000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Kaleng Minuman',
                'type' => 'Logam',
                'description' => 'Kaleng bekas minuman ringan.',
                'image_path' => 'images/items/kaleng_minuman.jpg',
                'weight' => 1.0,
                'price' => 3000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Botol Kaca',
                'type' => 'Kaca',
                'description' => 'Botol kaca bekas.',
                'image_path' => 'images/items/botol_kaca.jpg',
                'weight' => 1.5,
                'price' => 4000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Kardus Bekas',
                'type' => 'Kardus',
                'description' => 'Kardus bekas pengiriman.',
                'image_path' => 'images/items/kardus_bekas.jpg',
                'weight' => 3.0,
                'price' => 2500,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Besi Tua',
                'type' => 'Logam',
                'description' => 'Besi tua bekas proyek.',
                'image_path' => 'images/items/besi_tua.jpg',
                'weight' => 5.0,
                'price' => 8000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Elektronik Rusak',
                'type' => 'Elektronik',
                'description' => 'Elektronik bekas yang sudah rusak.',
                'image_path' => 'images/items/elektronik_rusak.jpg',
                'weight' => 7.0,
                'price' => 12000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Ban Bekas',
                'type' => 'Karet',
                'description' => 'Ban bekas kendaraan.',
                'image_path' => 'images/items/ban_bekas.jpg',
                'weight' => 10.0,
                'price' => 15000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Pakaian Bekas',
                'type' => 'Pakaian',
                'description' => 'Pakaian bekas yang masih layak pakai.',
                'image_path' => 'images/items/pakaian_bekas.jpg',
                'weight' => 4.0,
                'price' => 10000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
            [
                'user_id' => 1,
                'title' => 'Buku Bekas',
                'type' => 'Kertas',
                'description' => 'Buku bekas yang masih bisa digunakan.',
                'image_path' => 'images/items/buku_bekas.jpg',
                'weight' => 1.5,
                'price' => 6000,
                'phone_number' => '085712254851',
                'city' => 'Yogyakarta',
                'district' => 'Sleman',
                'full_address' => 'Jl. Kaliurang km 5, Sleman, Yogyakarta',
            ],
        ];

        foreach ($items as $item) {
            Items::create($item);
        }
    }
}
