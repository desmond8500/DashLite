<?php

use Illuminate\Database\Seeder;
use App\Models\DashPriority;

class DashPriorityTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('dash_priority')->delete();

		// Priorité1
		DashPriority::create(array(
				'name' => 'Centrale',
				'order' => 1
			));

		// Priorité2
		DashPriority::create(array(
				'name' => 'Organe 1',
				'order' => 2
			));

		// Priorité3
		DashPriority::create(array(
				'name' => 'Organe 2',
				'order' => 3
			));

		// Priorité4
		DashPriority::create(array(
				'name' => 'Organe3',
				'order' => 4
			));

		// Priorité5
		DashPriority::create(array(
				'name' => 'Cable',
				'order' => 5
			));

		// Priorité6
		DashPriority::create(array(
				'name' => 'Accessoires',
				'order' => 6
			));

		// Priorité7
		DashPriority::create(array(
				'name' => 'Forfait',
				'order' => 7
			));
	}
}