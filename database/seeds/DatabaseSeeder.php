<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('StatusTableSeeder');
		$this->command->info('Status table seeded!');

		$this->call('PriorityTableSeeder');
		$this->command->info('Priority table seeded!');
	}
}