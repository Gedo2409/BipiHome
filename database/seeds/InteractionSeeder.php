<?php

use Illuminate\Database\Seeder;

class InteractionSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('interactions')->insert([
			'name' => 'favorited',
			'display_name' => 'Favorito',
			'description' => 'Favorito',
		]);
		DB::table('interactions')->insert([
			'name' => 'contacted',
			'display_name' => 'Contactado',
			'description' => 'Contactado',
		]);
		DB::table('interactions')->insert([
			'name' => 'answered',
			'display_name' => 'Respondido',
			'description' => 'Respondido',
		]);
		DB::table('interactions')->insert([
			'name' => 'reviewed',
			'display_name' => 'Reseña',
			'description' => 'Reseña',
		]);
	}
}
