<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashClientTable extends Migration {

	public function up()
	{
		Schema::create('dash_client', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->mediumText('description')->nullable();
			$table->mediumText('address')->nullable();
			$table->string('logo')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_client');
	}
}
