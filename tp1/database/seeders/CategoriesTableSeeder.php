<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Categories')->insert([
            'id' => 1,
            'name' => 'Noticias',
            'description' => 'Últimas Noticias',
        ]);
        DB::table('Categories')->insert([
            'id' => 2,
            'name' => 'Tutoriales',
            'description' => 'Aprendé a usar nuestros servicios',
        ]);
        DB::table('Categories')->insert([
            'id' => 3,
            'name' => 'Eventos',
            'description' => 'Próximos eventos',
        ]);
    }
}
