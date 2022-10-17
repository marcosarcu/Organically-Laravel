<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'id' => 1,
                'title' => 'News 1',
                'description' => 'News 1 description',
                'category_id' => 1,
                'image' => 'default.jpg',
                'image_alt' => 'News 1 image alt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'title' => 'News 2',
                'description' => 'News 2 description',
                'category_id' => 2,
                'image' => 'default.jpg',
                'image_alt' => 'News 2 image alt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'title' => 'News 3',
                'description' => 'News 3 description',
                'category_id' => 3,
                'image' => 'default.jpg',
                'image_alt' => 'News 3 image alt',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]


        ]);
    }
}
