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
            'Básico',
            'Lo que necesitás para empezar',
            'Iniciá tu negocio con este paquete, que incluye todo lo necesario para empezar a crecer.',
            99.99,
            'basico.jpg',
            'Una mano con un gráfico de crecimiento',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
        DB::insert('INSERT INTO services (id, name, short_description, description, price, image, image_alt, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            2,
            'Intermedio',
            'Todo lo que necesitás para hacer crecer tu negocio',
            'Continuá escalando tu negocio, conseguí más ventas y más seguidores.',
            199.99,
            'intermedio.jpg',
            'Un carrito de compras con cajas dentro',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
        DB::insert('INSERT INTO services (id, name, short_description, description, price, image, image_alt, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            3,
            'Premium',
            'Lo que necesitás para ser el mejor',
            'Convertite en el mejor, este paquete incluye atención personalizada y asistencia de profesionales.',
            289.99,
            'premium.jpg',
            'Un hombre con una lluvia de dinero.',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
    }
}
