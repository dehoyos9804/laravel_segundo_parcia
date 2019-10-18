<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Aplicacion;
use Faker\Generator as Faker;

$factory->define(App\Models\Aplicacion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->catchPhrase,
        'categoria' =>  $faker->fileExtension,
        'descripcion' => $faker->text($maxNbChars = 200)
    ];
});
