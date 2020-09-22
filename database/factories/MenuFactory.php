<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Menu;
use App\Restaurant;
use Faker\Generator as Faker;

$factory->define(Menu::class, function (Faker $faker) {
    return [
        "restaurant_id" => function() {
            return Restaurant::get()->random();
        },
        "sandwich" => $faker->word,
        "burger" => $faker->word,
        "salad" => $faker->word,
        "price" => $faker->numberBetween(100, 300)
    ];
});
