<?php

use Illuminate\Database\Seeder;

class RoleUserPivotSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		// $users = App\User::all();
		$customer_role = App\Role::where('name', 'customer')->first();
		// foreach ($users as $u) { // Los usuarios ya se crean con el rol por medio de un evento
		// 	$u->attachRole($customer_role);
		// }

		$providers = App\Provider::all();
		$provider_role = App\Role::where('name', 'provider')->first();
		foreach ($providers as $p) {
			$u = App\User::find($p->user->id);
			$u->detachRole($customer_role);
			$u->attachRole($provider_role);
		}
	}
}
