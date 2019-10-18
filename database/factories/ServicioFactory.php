<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servicio;
use Faker\Generator as Faker;

$factory->define(App\Models\Servicio::class, function (Faker $faker) {
    return [
        'nombre' => $faker->catchPhrase,
        'descripcion' => $faker->text($maxNbChars = 200)
    ];
});
