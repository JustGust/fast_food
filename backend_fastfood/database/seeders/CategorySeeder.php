<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

          [
              'id' => '1',
              'name' => 'Salchipapas',
              'description' => 'Sin definir',
              'img' => 'https://telemedellin.tv/wp-content/uploads/2022/02/Salchipapa-Festival.jpg'
          ],
          [
            'id' => '2',
            'name' => 'Hamburguesas',
            'description' => 'Sin definir',
            'img' => 'https://1.bp.blogspot.com/-gXFqOLOJXT0/WdyVO57xdvI/AAAAAAAAAAQ/IzS9bkNw5GwGiK5LA2Tq8dO9F47T6cs9gCPcBGAYYCw/s1600/hamburguesa.jpg'
          ],
          [
            'id' => '3',
            'name' => 'Pizzas',
            'description' => 'Sin definir',
            'img' => 'https://www.lavanguardia.com/files/og_thumbnail/files/fp/uploads/2021/03/30/6063031b90a87.r_d.1083-871-0.jpeg'
          ],
          [
            'id' => '4',
            'name' => 'HotDog',
            'description' => 'Sin definir',
            'img' => 'https://saboryestilo.com.mx/wp-content/uploads/2021/06/Hot-Dog-Street-Style-1200x675.jpg'
          ],
          [
            'id' => '5',
            'name' => 'Bebidas',
            'description' => 'Sin definir',
            'img' => 'https://gerente.com/co/wp-content/uploads/sites/16/2017/09/gaseosa.jpg'
        ]

        ]);
    }
}
