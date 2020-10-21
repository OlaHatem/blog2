<?php



/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    return [

        'Code' => $faker->unique()->randomNumber(4),
        'Name' => $faker->word,
        'Scale' => $faker->randomNumber(10),
        'vendor' => $faker->word,
        'PdtDescription' => $faker->randomNumber(10),
        'QtyInStock' => $faker->word,
        'BuyPrice' => $faker->randomNumber(10),
        'MSRP' => $faker->word

    ];
});



