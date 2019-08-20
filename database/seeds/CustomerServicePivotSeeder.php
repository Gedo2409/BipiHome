<?php

use Illuminate\Database\Seeder;

class CustomerServicePivotSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		for ($i=0; $i < 100; $i++) {
			$customer = App\Customer::find(App\Customer::all()->random()->id);
			$service = App\Service::find(App\Service::all()->random()->id);

			$customer->services()->sync($service, false);
		}
	}
}
