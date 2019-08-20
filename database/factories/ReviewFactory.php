<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
	return [
		'customer_id' => App\Customer::all()->random()->id,
		'provider_id' => App\Provider::all()->random()->id,
		'grade' => $faker->numberBetween($min = 0, $max = 5),
		'review' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'is_approved' => $faker->boolean($chanceOfGettingTrue = 70)
	];
});
