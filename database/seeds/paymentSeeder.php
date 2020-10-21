<?php

use Illuminate\Database\Seeder;

class paymentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\payment::class, 3)->create();

         $this->call(paymentSeeder::class);
    }
}
