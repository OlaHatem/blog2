<?php

use Illuminate\Database\Seeder;

class productlineSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Productline::class, 4)->create();

         $this->call(productlineSeeder::class);
    }
}
