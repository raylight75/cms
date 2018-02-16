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
/** @var \App\Models\Products_sizes $factory */
$factory->define(App\Models\Products_sizes::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 600),
        'size_id' => $faker->numberBetween($min = 1, $max = 7),
    ];
});
