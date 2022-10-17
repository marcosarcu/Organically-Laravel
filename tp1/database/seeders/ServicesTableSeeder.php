<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO services (id, name, short_description, description, price, image, image_alt, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            1,
            'Service 1',
            'Service 1 short description',
            'Service 1 description',
            100.00,
            'default.jpg',
            'Service 1 image alt',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
        DB::insert('INSERT INTO services (id, name, short_description, description, price, image, image_alt, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            2,
            'Service 2',
            'Service 2 short description',
            'Service 2 description',
            200.00,
            'default.jpg',
            'Service 2 image alt',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
    }
}
