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
                'name' => 'active'
            ],
            [
                'id' => '2',
                'name' => 'inactive'
            ],
            [
                'id' => '3',
                'name' => 'out stock'
            ],

        ]);
    }
}
