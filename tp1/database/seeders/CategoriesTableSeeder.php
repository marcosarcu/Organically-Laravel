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
            'name' => 'Noticias',
            'description' => 'Últimas Noticias',
        ]);
        DB::table('Categories')->insert([
            'name' => 'Tutoriales',
            'description' => 'Aprendé a usar nuestros servicios',
        ]);
        DB::table('Categories')->insert([
            'name' => 'Eventos',
            'description' => 'Próximos eventos',
        ]);
    }
}
