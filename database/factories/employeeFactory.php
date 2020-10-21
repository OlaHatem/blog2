<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\employee;
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

$factory->define(employee::class, function (Faker $faker) {
    return [

        'id' => $faker->unique()->randomNumber(4),
        'reportsTo' => $faker->randomNumber(10),
        'LastName' => $faker->word,
        'FirstName' => $faker->word,
        'Extention' => $faker->word,
        'Email' => $faker->email,
        'JopTitle' => $faker->word


    ];
});


