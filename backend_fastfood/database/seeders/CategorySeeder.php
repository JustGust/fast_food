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
              'img' => 'null'
          ],
          [
            'id' => '2',
            'name' => 'Hamburguesas',
            'description' => 'Sin definir',
            'img' => 'null'
          ],
          [
            'id' => '3',
            'name' => 'Pizzas',
            'description' => 'Sin definir',
            'img' => 'null'
          ],
          [
            'id' => '4',
            'name' => 'HotDog',
            'description' => 'Sin definir',
            'img' => 'null'
          ],
          [
            'id' => '5',
            'name' => 'Bebidas',
            'description' => 'Sin definir',
            'img' => 'null'
        ]

        ]);
    }
}
