<?php

use Illuminate\Database\Seeder;

class CustomerProviderPivotSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		for ($i=0; $i < 100; $i++) {
			$provider = App\Provider::find(App\Provider::all()->random()->id);
			$customer = App\Customer::find(App\Customer::all()->random()->id);
			$interaction = App\Interaction::find(App\Interaction::all()->random()->id);

			$provider->customers()->save($customer, ['interaction_type' => $interaction->id]);
		}
	}
}
