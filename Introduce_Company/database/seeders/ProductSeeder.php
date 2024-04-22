<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name' => 'Vật liệu xây dựng',
            'description'=> 'Gạch, gỗ, xi măng, bê tông, thép, gỗ nhựa composite, vật liệu cách âm và cách nhiệt.',
            'price'=> 0,
            'img'=> '',
            'product_type_id'=>1,
            'status' => 1
        ]);
    }
}
