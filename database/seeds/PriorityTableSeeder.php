<?php

use Illuminate\Database\Seeder;
use App\Models\Priority;

class PriorityTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('Priority')->delete();

		// Priorité1
		Priority::create(array(
				'name' => 'Centrale',
				'order' => 1
			));

		// Priorité2
		Priority::create(array(
				'name' => 'Organe 1',
				'order' => 2
			));

		// Priorité3
		Priority::create(array(
				'name' => 'Organe 2',
				'order' => 3
			));

		// Priorité4
		Priority::create(array(
				'name' => 'Organe3',
				'order' => 4
			));

		// Priorité5
		Priority::create(array(
				'name' => 'Cable',
				'order' => 5
			));

		// Priorité6
		Priority::create(array(
				'name' => 'Accessoires',
				'order' => 6
			));

		// Priorité7
		Priority::create(array(
				'name' => 'Forfait',
				'order' => 7
			));
	}
}