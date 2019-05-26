<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */
use App\Smartphone;
use Faker\Generator as Faker;

$factory->define(Smartphone::class, function (Faker $faker) {
    return [
      "brand" => $faker -> word,
      "model" => $faker -> unique() -> word,
      "display" => $faker -> numberBetween(5, 12),
      "mem_ext" => $faker -> optional() -> numberBetween(64, 256)
    ];
});
