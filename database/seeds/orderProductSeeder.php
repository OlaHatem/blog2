<?php

use Illuminate\Database\Seeder;

class orderProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\order_product::class, 3)->create();

        $this->call(orderProductSeeder::class);
    }
}
