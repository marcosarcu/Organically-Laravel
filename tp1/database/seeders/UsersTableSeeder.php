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
            'contracted_service_at' => null,
            'contracted_service_id' => null,
            'contracted_service_expires_at' => null,
            'first_contracted_service_at' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Joe Doe',
            'email' => 'joedoe@gmail.com',
            'password' => Hash::make('123456'),
            'admin' => false,
            'contracted_service_at' => now(),
            'contracted_service_id' => 2,
            'contracted_service_expires_at' => now()->addDays(30),
            'first_contracted_service_at' => now()->subDays(60),
            'created_at' => now()->subDays(60),
            'updated_at' => now()->subDays(60),
        ]);
        DB::table('users')->insert([
            'name' => 'Jose Rodriguez',
            'email' => 'joserodriguez@gmail.com',
            'password' => Hash::make('998864jfnf'),
            'admin' => false,
            'contracted_service_at' => now()->subDays(10),
            'contracted_service_id' => 1,
            'contracted_service_expires_at' => now()->addDays(20),
            'first_contracted_service_at' => now()->subDays(100),
            'created_at' => now()->subDays(100),
            'updated_at' => now()->subDays(100),
        ]);
        DB::table('users')->insert([
            'name' => 'Roberto Martinez',
            'email' => 'robert.martinez998@gmail.com',
            'password' => Hash::make('messi2022!'),
            'admin' => false,
            'contracted_service_at' => now()->subDays(15),
            'contracted_service_id' => 3,
            'contracted_service_expires_at' => now()->addDays(15),
            'first_contracted_service_at' => now()->subDays(300),
            'created_at' => now()->subDays(300),
            'updated_at' => now()->subDays(300),
        ]);
        DB::table('users')->insert([
            'name' => 'Martin Gimenez',
            'email' => 'martin.gimenez21@gmail.com',
            'password' => Hash::make('12345678'),
            'admin' => false,
            'contracted_service_at' => now()->subDays(10),
            'contracted_service_id' => 2,
            'contracted_service_expires_at' => now()->addDays(20),
            'first_contracted_service_at' => now()->subDays(10),
            'created_at' => now()->subDays(10),
            'updated_at' => now()->subDays(10),
        ]);
    }
}
