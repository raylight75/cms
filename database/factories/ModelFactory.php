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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

/** @var \App\Models\Product $factory */
$factory->define(App\Models\Product::class, function (Faker\Generator $faker) {
    return [
        'slug' => "".$faker->firstNameMale."-".$faker->safeColorName ."-".$faker->firstNameMale ."-".$faker->lastName ."",
        'name' => "".$faker->firstNameMale." ".$faker->safeColorName ." ".$faker->lastName ."",
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

/** @var \App\Models\Colors_products $factory */
$factory->define(App\Models\Colors_products::class, function (Faker\Generator $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 600),
        'color_id' => $faker->numberBetween($min = 1, $max = 7),
    ];
});

/** @var \App\Models\Products_sizes $factory */
$factory->define(App\Models\Products_sizes::class, function (Faker\Generator $faker) {
    return [
        'product_id' => $faker->numberBetween($min = 1, $max = 600),
        'size_id' => $faker->numberBetween($min = 1, $max = 7),
    ];
});
