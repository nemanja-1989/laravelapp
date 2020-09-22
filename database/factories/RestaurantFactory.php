<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    return [
        "name" => $faker->company,
        "delivery_number" => $faker->phoneNumber,
        "delivery_time" => $faker->time,
        "min_price_order" => $faker->numberBetween(100, 110),
        "about_delivery" => $faker->paragraph,
        "delivery_price" => $faker->randomDigit,
        "restaurant_location" => $faker->address
    ];
});
