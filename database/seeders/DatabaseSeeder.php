<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class); // Jika ada seeder untuk User
        $this->call(ItemSeeder::class); // Tambahkan ini
    }
}
