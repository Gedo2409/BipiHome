<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		factory(App\Provider::class, 100)->create()->each(function ($p) {
			// save conditions
			$p->conditions()->sync([App\Condition::all()->random()->id, App\Condition::all()->random()->id, App\Condition::all()->random()->id], false);

			// save pics
			$pic1 = new App\Pic;
			$pic1->path = 'img/tra1.jpg';
			$pic1->description = 'Imagen de trabajo';
			$pic2 = new App\Pic;
			$pic2->path = 'img/tra2.jpg';
			$pic2->description = 'Imagen de trabajo';
			$pic3 = new App\Pic;
			$pic3->path = 'img/tra3.jpg';
			$pic3->description = 'Imagen de trabajo';
			$pic4 = new App\Pic;
			$pic4->path = 'img/tra4.jpg';
			$pic4->description = 'Imagen de trabajo';
			$pic5 = new App\Pic;
			$pic5->path = 'img/tra5.jpg';
			$pic5->description = 'Imagen de trabajo';
			$p->pics()->save($pic1);
			$p->pics()->save($pic2);
			$p->pics()->save($pic3);
			$p->pics()->save($pic4);
			$p->pics()->save($pic5);

		});
	}
}
