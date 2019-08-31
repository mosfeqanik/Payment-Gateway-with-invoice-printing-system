<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(\App\invoice::class, function (Faker $faker) {
    return [
        'customername' => $faker->name,
        'currency' => $faker->currencyCode,
        'description' => $faker->sentence(50),
        'quantity' => $faker->randomFloat(2,1500,1700),
        'unitprice' => $faker->randomFloat(3,300,2000),
        'discount' => $faker->randomFloat(3,50,20),
        'total' => $faker->randomFloat(3,10,2000),
    ];
});
