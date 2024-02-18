<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $images = [
            ['slider_id' => 1, 'image_path' => 'images/7994-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 1, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 1, 'image_path' => 'images/43362-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 1, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 2, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 2, 'image_path' => 'images/54771-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 2, 'image_path' => 'images/12048-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 2, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 3, 'image_path' => 'images/12048-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 3, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 3, 'image_path' => 'images/43362-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 3, 'image_path' => 'images/54771-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 4, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 4, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 4, 'image_path' => 'images/12048-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 4, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 5, 'image_path' => 'images/41738-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 5, 'image_path' => 'images/54771-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 5, 'image_path' => 'images/12048-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 5, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 6, 'image_path' => 'images/42800-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 6, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 6, 'image_path' => 'images/12048-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 6, 'image_path' => 'images/54771-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 7, 'image_path' => 'images/43362-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 7, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 7, 'image_path' => 'images/43362-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 7, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 8, 'image_path' => 'images/54771-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 8, 'image_path' => 'images/12047-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 8, 'image_path' => 'images/12048-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            ['slider_id' => 8, 'image_path' => 'images/31215-home_default.png', 'created_at' => now(), 'updated_at' => now()],
            
        ];

        DB::table('slider_images')->insert($images);
    }
}
