<?php

use Faker\Generator as Faker;

$factory->define(App\Lead::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'email' => $faker->email,             
		'career' => $faker->word(2,false),
		'program' => $faker->word(2,false)
		 
    ];
});
