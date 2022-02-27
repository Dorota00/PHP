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
        $category_id1 = DB::table('categories')->where('name', 'Women')->first()->id;
        $category_id2 = DB::table('categories')->where('name', 'Men')->first()->id;

        DB::table('products')->insert([
            'brand' => 'Lasocki',
            'type' => 'Boots',
            'description' => 'Brown boots for elegant women.',
            'price' => 120,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  'Women/boots_1.jpeg')->first()->id,

        ]);
        DB::table('products')->insert([
            'brand' => 'Lasocki',
            'type' => 'Boots',
            'description' => 'Brown boots for elegant women.',
            'price' => 100,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  'Women/boots_2.jpeg')->first()->id,

        ]);
        DB::table('products')->insert([
            'brand' => 'Deezee',
            'type' => 'High-heels',
            'description' => 'Yellow heels for every women.',
            'price' => 80,
            'category_id' => $category_id1,
            'image_id' => DB::table('images')->where('file_name',  'Women/heels.jpeg')->first()->id,

        ]);

        DB::table('products')->insert([
            'brand' => 'Lasocki',
            'type' => 'Elegant',
            'description' => 'Brown elegant shoes for men.',
            'price' => 77,
            'category_id' => $category_id2,
            'image_id' => DB::table('images')->where('file_name',  'Men/elegant.jpeg')->first()->id,

        ]);

        DB::table('products')->insert([
            'brand' => 'Nike',
            'type' => 'Sneakers',
            'description' => 'Sneakers for men',
            'price' => 96,
            'category_id' => $category_id2,
            'image_id' => DB::table('images')->where('file_name',  'Men/sneakers.jpeg')->first()->id,

        ]);
    }


}

