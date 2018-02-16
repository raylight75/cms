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
/** @var \App\Models\Product $factory */
$factory->define(App\Models\Product::class, function (Faker $faker) {
    return [
        'slug' => "" . $faker->firstNameMale . "-" . $faker->safeColorName . "-" . $faker->firstNameMale . "-" . $faker->lastName . "",
        'name' => "" . $faker->firstNameMale . " " . $faker->safeColorName . " " . $faker->lastName . "",
        'description' => $faker->text(),
        'a_img' => 'demo.jpg',
        'b_img' => 'demo.jpg',
        'c_img' => 'demo.jpg',
        'brand_id' => $faker->numberBetween($min = 1, $max = 7),
        'cat_id' => $faker->numberBetween($min = 5, $max = 15),
        'parent_id' => $faker->numberBetween($min = 1, $max = 2),
        'quantity' => $faker->numberBetween($min = 2, $max = 100),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 100),
    ];
});
