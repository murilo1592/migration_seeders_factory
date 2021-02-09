<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\departments::class, function (Faker $faker) {
    return [
        'title' => $faker->name(),
        'age_range' => $faker->numberBetween(5, 14),
        'publish_at' => $faker->dateTime(),
        'category' => function(){
            return factory(\LaraDev\Categories::class)->create()->id;
        }
    ];
});
