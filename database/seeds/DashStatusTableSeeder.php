<?php

use Illuminate\Database\Seeder;
use App\Models\DashStatus;

class DashStatusTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('dash_status')->delete();

		// Seed1
		DashStatus::create(array(
				'name' => 'Nouveau',
				'order' => 1
			));

		// Seed2
		DashStatus::create(array(
				'name' => 'En cours',
				'order' => 2
			));

		// Seed3
		DashStatus::create(array(
				'name' => 'En pause',
				'order' => 3
			));

		// Seed4
		DashStatus::create(array(
				'name' => 'Annulé',
				'order' => 4
			));

		// Seed5
		DashStatus::create(array(
				'name' => 'Terminé',
				'order' => 5
			));
	}
}