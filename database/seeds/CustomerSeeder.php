<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		factory(App\Customer::class, 50)->create();
	}
}
