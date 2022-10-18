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
                'title' => 'Instagram: cómo hacer crecer tu negocio en esta red social',
                'description' => 'Para crecer en Instagram es recomendable publicar Reels.  Los famosos videos cortos, que sin importar si los usuarios te siguen o no, tienen un tiempo de vida superior y un alcance mayor. Es decir, su capacidad rotativa es más alta, por lo que es importante añadirlos a tu parrilla de contenidos de acuerdo a los gustos de tu público. Comienza a crear y se la interacción que tus seguidores tienen con cada uno de los reels publicados, vas a tener una mayor dirección del tipo de información que necesita tu público.',
                'category_id' => 2,
                'image' => 'instagram.jpg',
                'image_alt' => 'Fotografía de varios logos de Instagram en 3D apilados.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'title' => 'Los últimos cambios en el algoritmo de LinkedIn',
                'description' => 'Ahora, más que nunca, las marcas se están enfocando en brindar experiencias relevantes y personalizadas para los clientes, aprendiendo sobre sus preferencias. LinkedIn entiende la importancia de esto, por lo que está integrando nuevas funciones, con el objetivo de que los usuarios tengan más control sobre el contenido del feed y decidan qué es relevante para ellos y qué no. Ahora, la opción de No quiero ver esto está disponible en cada publicación, lo que permite a los usuarios reducir la visualización del contenido de ciertos temas, autores o creadores. Solo tendrán que hacer clic en los 3 puntitos que aparecen en la esquina de la publicación y elegir la opción mencionada. En esta sección, también pueden reportar contenido específico que vaya en contra de las Políticas de la Comunidad Profesional de LinkedIn. La compañía también está probando una función que permite a los usuarios reducir el contenido político que aparece en sus feeds. Esto incluye contenido relacionado con partidos políticos y candidatos, resultados electorales e iniciativas electorales. Para activar esta opción, los usuarios pueden hacer clic en el icono "More" en la parte superior derecha de una publicación o en la configuración de preferencias de su feed. Una vez que esté activado, eliminarán la publicación específica de su feed y, con el tiempo, les mostrará menos de ese contenido. Esta característica solo está disponible en inglés y para miembros en los EE. UU. en este momento, pero según los comentarios, planean expandir estos cambios a otros idiomas y regiones.',
                'category_id' => 1,
                'image' => 'linkedin.jpg',
                'image_alt' => 'Una fotografía de un celular con la aplicación de LinkedIn abierta.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'title' => 'Nuevo evento: ¡Conocé a los creadores de la plataforma!',
                'description' => 'Este 15 de septiembre, a las 19:00 hs, te invitamos a un evento en el que conocerás a los creadores de la plataforma. ¡No te lo pierdas! Para participar, enviar un email a eventos@organically.com.',
                'category_id' => 3,
                'image' => 'evento.jpg',
                'image_alt' => 'Fotografía de dos personas dandose la mano.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]


        ]);
    }
}
