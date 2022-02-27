<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['file_name' => 'Women/Women.jpg'],
            ['file_name' => 'Men/Men.jpg'],
            ['file_name' => 'Women/boots_1.jpeg'],
            ['file_name' => 'Women/boots_2.jpeg'],
            ['file_name' => 'Women/heels.jpeg'],
            ['file_name' => 'Men/elegant.jpeg'],
            ['file_name' => 'Men/sneakers.jpeg'],

        ]);
    }
}
