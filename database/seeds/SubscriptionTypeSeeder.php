<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SubscriptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$faker = Faker::create();

			DB::table('subscription_types')->insert([
				'name' => 'free',
				'display_name' => 'Sin costo',
				'description' => 'Sin costo',
				'price' => 0.00,
			]);
			// DB::table('subscription_types')->insert([
			// 	'name' => 'standard',
			// 	'display_name' => 'Standard',
			// 	'description' => 'Standard',
			// 	'price' => 399.00,
			// ]);
			DB::table('subscription_types')->insert([
				'name' => 'premium',
				'display_name' => 'Premium',
				'description' => 'Premium',
				'price' => 4500.00,
			]);
    }
}
