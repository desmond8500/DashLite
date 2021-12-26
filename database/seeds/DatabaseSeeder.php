<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('DashStatusTableSeeder');
		$this->command->info('DashStatus table seeded!');

		$this->call('DashPriorityTableSeeder');
		$this->command->info('DashPriority table seeded!');
	}
}