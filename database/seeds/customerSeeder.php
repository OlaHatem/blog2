<?php

use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\customer::class, 12)->create();

          $this->call(customerSeeder::class);
    }
}
