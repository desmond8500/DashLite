<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientTable extends Migration {

	public function up()
	{
		Schema::create('Client', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description');
			$table->mediumText('address');
			$table->string('logo');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Client');
	}
}