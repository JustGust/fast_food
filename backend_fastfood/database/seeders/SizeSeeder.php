<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
            [
                'id' => '1',
                'name' => 'Paqueña'
            ],
            [
                'id' => '2',
                'name' => 'Mediana'
            ],
            [
                'id' => '3',
                'name' => 'Grande'
            ],
            [
                'id' => '4',
                'name' => 'Precio único'
            ]
         ]);
    }
}
