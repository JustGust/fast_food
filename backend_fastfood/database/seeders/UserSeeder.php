<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([

            [
                'id' => '1',
                'name' => 'Gustavo Alomia',
                'email' => 'gusalomia@gmail.com',
                'password' => bcrypt('12345678'),
                'id_role' => '1'
            ],

            [
                'id' => '2',
                'name' => 'Andrea Riascos',
                'email' => 'andrea@gmail.com',
                'password' => bcrypt('12345678'),
                'id_role' => '2'
            ]

        ]);
    }
}
