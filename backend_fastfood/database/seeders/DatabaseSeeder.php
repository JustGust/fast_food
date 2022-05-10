<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            RoleSeeder::class,
            SizeSeeder::class,
            UserSeeder::class,
            StatuSeeder::class,
            CategorySeeder::class,
            OrderStatusSeeder::class,
            ProductSeeder::class,
            TableSeeder::class

        ]);
    }
}
