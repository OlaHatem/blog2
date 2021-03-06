<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productline;
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


$factory->define(Productline::class, function (Faker $faker) {
    return [

        'id' => $faker->unique()->randomNumber(4),
        'DescInText' => $faker->word,
        'DescInHTML' => $faker->word,
        'Image' => $faker->word

    ];
});



