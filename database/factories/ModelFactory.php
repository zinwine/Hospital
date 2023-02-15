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
$factory->define(App\Doctor::class, function (Faker\Generator $faker) {
    // static $password;

    return [
        'name' => $faker->name,
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'gender' => $faker->randomElement($array = array ('Male','Female')),
        'department' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'bechelor' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'age' => numberBetween($min = 30, $max = 60) ,
        'experience' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        'specialist' => $faker->company,
    ];
});
