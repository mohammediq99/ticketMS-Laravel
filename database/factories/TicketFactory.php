<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ticket::class, function (Faker $faker) {
    return [
      'summury' => $faker->sentence,
      'description' => $faker->paragraph, 
      'status' =>   $faker->word
    ];
});
