<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\order_product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(order_product::class, function (Faker $faker) {
    return [

        'id' => $faker->unique()->randomNumber(4),
        'Qty' => $faker->randomNumber(10),
        'PriceEach' => $faker->randomNumber(19),



    ];
});



