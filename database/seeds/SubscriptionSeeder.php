<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class SubscriptionSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$faker = Faker::create();

		$providers = App\Provider::all();
		foreach ($providers as $p) {
			$s = new App\Subscription;
			$s->provider_id = $p->id;
			$s->subscription_type_id = App\SubscriptionType::all()->random()->id;
			$s->subscription_start = Carbon::now()->subDays($faker->numberBetween($min = 1, $max = 45));
			$s->subscription_end = Carbon::now()->addMonths($faker->numberBetween($min = 1, $max = 4));
			$s->autorenew = $faker->boolean($chanceOfGettingTrue = 50);
			$s->save();
		}
	}
}
