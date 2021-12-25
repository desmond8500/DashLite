<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Status')->delete();

		// Seed1
		Status::create(array(
				'name' => 'Nouveau',
				'order' => 1
			));

		// Seed2
		Status::create(array(
				'name' => 'En cours',
				'order' => 2
			));

		// Seed3
		Status::create(array(
				'name' => 'En pause',
				'order' => 3
			));

		// Seed4
		Status::create(array(
				'name' => 'Annulé',
				'order' => 4
			));

		// Seed5
		Status::create(array(
				'name' => 'Terminé',
				'order' => 5
			));
	}
}