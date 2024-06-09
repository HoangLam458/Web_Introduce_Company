<?php

namespace Database\Seeders;

use App\Mail\Contact;
use App\Models\ProjectImg;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ServiceSeeder::class,
            ProductTypeSeeder::class,
            ProductSeeder::class,
            ProjectSeeder::class,
            ContactSeeder::class,
            ProjectImgSeeder::class
        ]);
    }
}
