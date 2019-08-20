<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
	$name = $faker->sentence($nbWords = 6, $variableNbWords = true);
	return [
		'provider_id' => App\Provider::all()->random()->id,
		'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 9999),
		'name' => str_slug($name),
		'display_name' => $name,
		'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
	];
});
