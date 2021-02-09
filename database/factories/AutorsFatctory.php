<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Autor::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'email' => $faker->email(),
        'construction' => $faker->jobTitle
    ];
});
