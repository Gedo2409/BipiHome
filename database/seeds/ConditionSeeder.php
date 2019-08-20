<?php

use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		DB::table('conditions')->insert([
			'name' => 'servicio-24-horas',
			'display_name' => 'Servicio 24 horas',
			'description' => 'Trabaja 24 horas al día',
			'icon' => 'fa fa-clock-o',
		]);
		DB::table('conditions')->insert([
			'name' => 'seguro-por-extravio',
			'display_name' => 'Seguro por extravío',
			'description' => 'Incluye seguro por extravío',
			'icon' => 'fa fa-life-buoy',
		]);
		DB::table('conditions')->insert([
			'name' => 'da-factura',
			'display_name' => 'Da factura',
			'description' => 'Da Factura',
			'icon' => 'fa fa-bill',
		]);
		DB::table('conditions')->insert([
			'name' => 'da-ticket',
			'display_name' => 'Da ticket',
			'description' => 'Da ticket',
			'icon' => 'fa fa-ticket',
		]);
		DB::table('conditions')->insert([
			'name' => 'acepta-depositos',
			'display_name' => 'Acepta Depósitos',
			'description' => 'Acepta Depósitos',
			'icon' => 'fa fa-credit-card',
		]);
		DB::table('conditions')->insert([
			'name' => 'acepta-tarjeta',
			'display_name' => 'Acepta Tarjeta',
			'description' => 'Acepta Tarjeta',
			'icon' => 'fa fa-credit-card-alt',
		]);
		DB::table('conditions')->insert([
			'name' => 'ofrece-garantia',
			'display_name' => 'Ofrece Garantía',
			'description' => 'Ofrece Garantía',
			'icon' => 'fa fa-ticket-alt',
		]);
	}
}
