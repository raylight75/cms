<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use Faker\Generator as Faker;

/** Seed Database for test with random data */
/** @var \App\Models\Colors_products $factory */
$factory->define(App\Models\Colors_products::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 600),
        'color_id' => $faker->numberBetween($min = 1, $max = 7),
    ];
});
