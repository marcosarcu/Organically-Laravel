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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Joe Doe',
            'email' => 'joedoe@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
