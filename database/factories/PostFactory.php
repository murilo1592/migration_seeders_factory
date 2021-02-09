<?php

use Faker\Generator as Faker;

$factory->define(\LaraDev\Posts::class, function (Faker $faker) {

    $title = $faker->sentence(10);

    return [
        'title' => $title,
        'subtitle' => $faker->sentence(10),
        'description' => $faker->paragraph(5),
        'publish_at' => $faker->dateTime(),
        'slug' => str_slug($title),
        'category' => function(){
            return factory(\LaraDev\Categories::class)->create()->id;
        }
    ];
});
