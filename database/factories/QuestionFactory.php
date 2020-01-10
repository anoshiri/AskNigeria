<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(rand(3,10)),
        'body' => $faker->paragraphs(rand(3,10), true),
        'views' => rand(0,50),
        'answers' => rand(0,10),
        'votes' => rand(-10,10)
    ];
});
