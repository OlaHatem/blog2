<?php


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




/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\office;
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


$factory->define(office::class, function (Faker $faker) {
    return [

        'Code' => $faker->unique()->randomNumber(4),
        'City' => $faker->city,
        'Phone' => $faker->phoneNumber,
        'Adress1' => $faker->address,
        'Adress2' => $faker->address,
        'State' => $faker->state,
        'Country' => $faker->country,
        'PostalCode' => $faker->randomNumber(),
        'Territory' => $faker->word



    ];
});






