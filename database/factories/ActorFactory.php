<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Actor;
use Faker\Generator as Faker;

$factory->define(App\Models\Actor::class, function (Faker $faker) {
    return [
        'identificacion' => $faker->numberBetween($min = 1000, $max = 9000),
        'nombres'=>$faker->firstName,
        'apellidos'=>$faker->lastName,
        'correo'=>$faker->email
    ];
});
