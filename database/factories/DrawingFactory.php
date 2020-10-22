<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drawing;
use Faker\Generator as Faker;

$factory->define(Drawing::class, function (Faker $faker) {
    return [
        'city'        => $faker->city,
        'lat'         => rand(-90.00, 90.00),
        'lon'     	  => rand(-180.00, 180.00),
        'price'		  => rand(1,100) * 100
    ];
});
