<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Marcos Arcusin',
            'email' => 'marcosarcu@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => true,
            'contracted_service_id' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Joe Doe',
            'email' => 'joedoe@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => false,
            'contracted_service_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
