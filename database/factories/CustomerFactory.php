<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
	return [
		'user_id' => factory(App\User::class)->create()->id,
		'phone' => $faker->tollFreePhoneNumber,
		'email' => $faker->unique()->safeEmail,
		'street' => $faker->streetName,
		'neighborhood' => $faker->state,
		'city' => $faker->city,
		'postal_code' => $faker->postcode
	];
});
