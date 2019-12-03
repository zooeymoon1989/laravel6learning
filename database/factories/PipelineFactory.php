<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pipeline;
use Faker\Generator as Faker;

$factory->define(Pipeline::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'active'=>random_int(0,1)
    ];
});
