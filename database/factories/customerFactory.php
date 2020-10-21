<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\customer;
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


$factory->define(customer::class, function (Faker $faker) {
    return [

        'id' => $faker->unique()->randomNumber(4),
        'Name' => $faker->word,
        'LastName' => $faker->word,
        'FirstName' => $faker->word,
        'Phone' => $faker->phoneNumber,
        'Adress1' => $faker->word,
        'Adress2' => $faker->word,
        'City' => $faker->city,
        'State' => $faker->state,
        'PostalCode' => $faker->randomNumber(10),
        'Country' => $faker->country,
        'CreditLimit' => $faker->randomNumber(10)

    ];
});

