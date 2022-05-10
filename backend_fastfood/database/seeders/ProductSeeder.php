<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

            [
                'id' => '1',
                'name' => 'Salchi Queso',
                'id_status' => '1',
                'id_category' => '1',
                'img' => 'https://www.totusnoticias.com/wp-content/uploads/2021/12/Receta-de-Salchipapas-Salchipapa-colombiana-–-La-Cocina-Latina.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '2',
                'name' => 'Salchi Carne',
                'id_status' => '1',
                'id_category' => '1',
                'img' => 'https://mariobross.com.co/wp-content/uploads/2018/08/Mario-Bross-Salchipapa-Combinada.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '3',
                'name' => 'Salchi Costilla',
                'id_status' => '1',
                'id_category' => '1',
                'img' => 'https://www.peru.travel/Contenido/Evento/Imagen/es/518/1.1/Evento/dia-de-salchipapa.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '4',
                'name' => 'Salchi Todo',
                'id_status' => '1',
                'id_category' => '1',
                'img' => 'https://images.rappi.com/products/gp_main_salchipapa_pollo.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '5',
                'name' => 'Salchi Sencilla',
                'id_status' => '1',
                'id_category' => '1',
                'img' => 'https://mastike.cl/wp-content/uploads/salchipapa.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '6',
                'name' => 'Hamburguesa Sencilla',
                'id_status' => '1',
                'id_category' => '2',
                'img' => 'https://cdn2.cocinadelirante.com/sites/default/files/styles/gallerie/public/images/2018/09/receta-super-facil-de-carne-para-hamburguesa-suave.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '7',
                'name' => 'Hamburguesa Gratinada',
                'id_status' => '1',
                'id_category' => '2',
                'img' => 'https://media-cdn.tripadvisor.com/media/photo-s/0d/08/ee/ac/hamburguesa-gratinada.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '8',
                'name' => 'Hamburguesa Clásica De Ternera',
                'id_status' => '1',
                'id_category' => '2',
                'img' => 'https://img.freepik.com/foto-gratis/deliciosa-hamburguesa-ternera-clasica-tomates-cherry_23-2148290641.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '9',
                'name' => 'Hamburguesa Vegetariana',
                'id_status' => '1',
                'id_category' => '2',
                'img' => 'https://easyrecetas.com/wp-content/uploads/2020/05/Receta-de-Hamburguesas-Vegetarianas.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '10',
                'name' => 'Pizzas Hawaiana',
                'id_status' => '1',
                'id_category' => '3',
                'img' => 'https://irecetasfaciles.com/wp-content/uploads/2020/03/pizza-hawaiana.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '11',
                'name' => 'Pizzas Champiñones',
                'id_status' => '1',
                'id_category' => '3',
                'img' => 'https://www.coosur.com/uploads/recetasaceiteoliva/pizza-con-pollo-y-champinones.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '12',
                'name' => 'Pizzas Napolitana',
                'id_status' => '1',
                'id_category' => '3',
                'img' => 'https://www.cocinayvino.com/wp-content/uploads/2018/08/pizza-napolitana-2-e1534286138178-1200x675.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '13',
                'name' => 'Hot Dog',
                'id_status' => '1',
                'id_category' => '4',
                'img' => 'https://saboryestilo.com.mx/wp-content/uploads/2021/06/Hot-Dog-Street-Style-1200x675.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '14',
                'name' => 'manzana',
                'id_status' => '1',
                'id_category' => '5',
                'img' => 'https://mir-s3-cdn-cf.behance.net/projects/404/52755b118568723.Y3JvcCwzNTQzLDI3NzEsMCwxMjcx.jpg',
                'description' => 'Sin descripción'
            ],
            [
                'id' => '15',
                'name' => 'coca-cola',
                'id_status' => '1',
                'id_category' => '5',
                'img' => 'https://s1.eestatic.com/2015/05/26/cocinillas/cocinillas_36256386_116179797_1706x960.jpg',
                'description' => 'Sin descripción'
            ],
      

        ]);

        DB::table('product_costs')->insert([

            [
                'id' => '1',
                'id_product' => '1',
                'id_size' => '1',
                'cost' => '8000'
            ],
            [
                'id' => '2',
                'id_product' => '1',
                'id_size' => '3',
                'cost' => '12000'
            ],
            [
                'id' => '4',
                'id_product' => '2',
                'id_size' => '1',
                'cost' => '12000'
            ],
            [
                'id' => '5',
                'id_product' => '2',
                'id_size' => '2',
                'cost' => '22000'
            ],
            [
                'id' => '6',
                'id_product' => '3',
                'id_size' => '1',
                'cost' => '12000'
            ],
            [
                'id' => '7',
                'id_product' => '3',
                'id_size' => '3',
                'cost' => '22000'
            ],
            [
                'id' => '8',
                'id_product' => '4',
                'id_size' => '1',
                'cost' => '15000'
            ],
            [
                'id' => '9',
                'id_product' => '4',
                'id_size' => '3',
                'cost' => '35000'
            ],
            [
                'id' => '10',
                'id_product' => '5',
                'id_size' => '1',
                'cost' => '5000'
            ],
            [
                'id' => '11',
                'id_product' => '5',
                'id_size' => '3',
                'cost' => '1000'
            ],
            [
                'id' => '12',
                'id_product' => '6',
                'id_size' => '4',
                'cost' => '15000'
            ],
            [
                'id' => '13',
                'id_product' => '7',
                'id_size' => '4',
                'cost' => '32000'
            ],
            [
                'id' => '14',
                'id_product' => '8',
                'id_size' => '4',
                'cost' => '30000'
            ],
            [
                'id' => '15',
                'id_product' => '9',
                'id_size' => '4',
                'cost' => '24000'
            ],
            [
                'id' => '16',
                'id_product' => '10',
                'id_size' => '1',
                'cost' => '10000'
            ],
            [
                'id' => '17',
                'id_product' => '10',
                'id_size' => '2',
                'cost' => '25000'
            ],
            [
                'id' => '18',
                'id_product' => '10',
                'id_size' => '3',
                'cost' => '67000'
            ],
            [
                'id' => '19',
                'id_product' => '11',
                'id_size' => '1',
                'cost' => '10000'
            ],
            [
                'id' => '20',
                'id_product' => '11',
                'id_size' => '2',
                'cost' => '25000'
            ],
            [
                'id' => '21',
                'id_product' => '11',
                'id_size' => '3',
                'cost' => '67000'
            ],
            [
                'id' => '22',
                'id_product' => '12',
                'id_size' => '1',
                'cost' => '10000'
            ],
            [
                'id' => '23',
                'id_product' => '12',
                'id_size' => '2',
                'cost' => '25000'
            ],
            [
                'id' => '24',
                'id_product' => '12',
                'id_size' => '3',
                'cost' => '67000'
            ],
            [
                'id' => '25',
                'id_product' => '13',
                'id_size' => '4',
                'cost' => '12000'
            ],
            [
                'id' => '26',
                'id_product' => '14',
                'id_size' => '1',
                'cost' => '1500'
            ],
            [
                'id' => '27',
                'id_product' => '14',
                'id_size' => '2',
                'cost' => '3500'
            ],
            [
                'id' => '28',
                'id_product' => '14',
                'id_size' => '3',
                'cost' => '5500'
            ],
            [
                'id' => '29',
                'id_product' => '15',
                'id_size' => '1',
                'cost' => '1500'
            ],
            [
                'id' => '30',
                'id_product' => '15',
                'id_size' => '2',
                'cost' => '3500'
            ],
            [
                'id' => '31',
                'id_product' => '15',
                'id_size' => '3',
                'cost' => '5500'
            ],

        ]);

    }
}
