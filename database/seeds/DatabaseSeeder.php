<?php

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
        factory(\App\Product::class, 10)->create(); //Crea los prodcutos definidos en el factory.
        factory(\App\User::class, 5)->create(); //Crea los prodcutos definidos en el factory.
    }
}
