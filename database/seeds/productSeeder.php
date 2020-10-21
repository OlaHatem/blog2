<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Product::class, 8)->create();

         $this->call(productSeeder::class);
    }
}
