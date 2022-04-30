<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            [
                'id' => '1',
                'name' => 'mesa 1',
                'id_statu' => '1'
            ],
            [
                'id' => '2',
                'name' => 'mesa 2',
                'id_statu' => '1'
            ],
            [
                'id' => '3',
                'name' => 'mesa 3',
                'id_statu' => '1'
            ],
            [
                'id' => '4',
                'name' => 'mesa 4',
                'id_statu' => '1'
            ],
            [
                'id' => '5',
                'name' => 'mesa 5',
                'id_statu' => '1'
            ],
            [
                'id' => '6',
                'name' => 'mesa 6',
                'id_statu' => '1'
            ],
            [
                'id' => '7',
                'name' => 'mesa 7',
                'id_statu' => '1'
            ]



        ]);
    }
}
