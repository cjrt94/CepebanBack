<?php

use Faker\Generator as Faker;

$factory->define(App\Lead::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'email' => $faker->email,
		'venue' => $faker->word(2,false),
		'type' => $faker->word(2,false)

    ];
});
siren