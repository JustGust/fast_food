<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([

            [
                'id' => '1',
                'name' => 'activo'
            ],
            [
                'id' => '2',
                'name' => 'inactivo'
            ]

        ]);
    }
}
