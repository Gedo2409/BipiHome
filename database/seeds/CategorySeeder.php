<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('categories')->insert([
			'name' => 'hogar',
			'display_name' => 'Hogar',
			'description' => 'Hogar',
			'icon' => 'fa fa-hammer',
		]);
		DB::table('categories')->insert([
			'name' => 'autos',
			'display_name' => 'Autos',
			'description' => 'Autos',
			'icon' => 'fa fa-toolbox',
		]);
		DB::table('categories')->insert([
			'name' => 'educacion',
			'display_name' => 'Educación',
			'description' => 'Educación',
			'icon' => 'fa fa-wrench',
		]);
		DB::table('categories')->insert([
			'name' => 'diversion_y_esparcimiento',
			'display_name' => 'Diversion y Esparcimiento',
			'description' => 'Diversion y Esparcimiento',
			'icon' => 'fa fa-paint-roller',
		]);
		DB::table('categories')->insert([
			'name' => 'salud_y_belleza',
			'display_name' => 'Salud y Belleza',
			'description' => 'Salud y Belleza',
			'icon' => 'fa fa-tools',
		]);
		DB::table('categories')->insert([
			'name' => 'mascotas',
			'display_name' => 'Mascotas',
			'description' => 'Mascotas',
			'icon' => 'fa fa-user',
		]);
		DB::table('categories')->insert([
			'name' => 'moda',
			'display_name' => 'Moda',
			'description' => 'Moda',
			'icon' => 'fa fa-user',
		]);
	}
}
