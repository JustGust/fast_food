<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_status')->insert([
            [
                'id' => '1',
                'name' => 'En espera para ser procesado'
            ],
            [
                'id' => '2',
                'name' => 'Turno asignado'
            ],
            [
                'id' => '3',
                'name' => 'En preparación'
            ],
            [
                'id' => '4',
                'name' => 'Ya casi esta listo!'
            ],
            [
                'id' => '5',
                'name' => 'tu pedido esta listo!'
            ],
            [
                'id' => '6',
                'name' => 'En camino'
            ],
            [
                'id' => '7',
                'name' => 'Entregado'
            ]
        ]);
    }
}
