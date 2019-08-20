<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('roles')->insert([
			'name' => 'customer',
			'display_name' => 'Cliente',
			'description' => 'Cliente',
		]);
		DB::table('roles')->insert([
			'name' => 'provider',
			'display_name' => 'Proveedor',
			'description' => 'Proveedor',
		]);
		DB::table('roles')->insert([
			'name' => 'expired',
			'display_name' => 'Suscripción Expirada',
			'description' => 'Suscripción Expirada',
		]);
		DB::table('roles')->insert([
			'name' => 'admin',
			'display_name' => 'Administrador',
			'description' => 'Administrador',
		]);
	}
}
