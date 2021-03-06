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
use Carbon\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'is_admin' => false,
    ];
});

$factory->define(App\Business::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->company,
        'zip_code' => $faker->postcode,
        'active' => true,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});