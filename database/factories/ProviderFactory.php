<?php

use Faker\Generator as Faker;

$factory->define(App\Provider::class, function (Faker $faker) {
	return [
		'user_id' => factory(App\User::class)->create()->id,
		'logo_path' => $faker->randomElement($array = array ('/img/serv1.png','/img/serv2.png','/img/serv3.png','/img/serv4.png')),
		'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
		'active' => $faker->boolean($chanceOfGettingTrue = 75),
		'phone' => $faker->tollFreePhoneNumber,
		'name' => $faker->name,
		'street' => $faker->streetName,
		'neighborhood' => $faker->state,
		'city' => $faker->city,
		'postal_code' => $faker->postcode,
		'category_id' => App\Category::all()->random()->id,
	];
});
