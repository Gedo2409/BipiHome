<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$this->call(ConditionSeeder::class);
		$this->call(InteractionSeeder::class);
		$this->call(CategorySeeder::class);
		$this->call(RoleSeeder::class);
		$this->call(SubscriptionTypeSeeder::class);

		$this->call(AdminSeeder::class);
		$this->call(ProviderSeeder::class);
		$this->call(CustomerSeeder::class);
		$this->call(ServiceSeeder::class);

		$this->call(ReviewSeeder::class);
		$this->call(CustomerProviderPivotSeeder::class);
		$this->call(CustomerServicePivotSeeder::class);
		$this->call(RoleUserPivotSeeder::class);
		$this->call(SubscriptionSeeder::class);
	}
}
