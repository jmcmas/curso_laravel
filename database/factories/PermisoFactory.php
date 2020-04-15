<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(),     // Indicamos que faker rellene el campo nombre con una palabra aleatoria.
        'slug' => $faker->word(),       // Indicamos que faker rellene el campo slug con una palabra aleatoria.
    ];
});
