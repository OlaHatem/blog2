<?php

use Illuminate\Database\Seeder;

class officeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\office::class, 9)->create();

       $this->call(officeSeeder::class);
    }
}
