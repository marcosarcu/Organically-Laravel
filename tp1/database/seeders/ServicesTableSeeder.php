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
            'Lo que necesitas para empezar',
            'Inicia tu negocio con este paquete, que incluye todo lo necesario para empezar a crecer.',
            99.99,
            'basico.jpg',
            'Una imagen de una mano con un gráfico de crecimiento',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
        DB::insert('INSERT INTO services (id, name, short_description, description, price, image, image_alt, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            2,
            'Intermedio',
            'Todo lo que necesitas para hacer crecer tu negocio',
            'Continua escalando tu negocio, consigue mas ventas y mas seguidores.',
            199.99,
            'intermedio.jpg',
            'Imagen de un carrito de compras con cajas dentro',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
        DB::insert('INSERT INTO services (id, name, short_description, description, price, image, image_alt, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            3,
            'Premium',
            'Lo que necesitas para ser el mejor',
            'Convertite en el mejor, este paquete incluye atención personalizada y asistencia de profesionales.',
            289.99,
            'premium.jpg',
            'Imagen de un hombre con una lluvia de dinero.',
            date('Y-m-d H:i:s'),
            date('Y-m-d H:i:s'),
        ]);
    }
}
