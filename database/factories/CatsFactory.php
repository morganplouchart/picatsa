<?php

use Faker\Generator as Faker;

$factory->define(App\Cats::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'couleur' => $faker->colorName,
        'photo' => $faker->imageUrl(640, 480, 'cats'),
        'description' => $faker->sentence
    ];
});
