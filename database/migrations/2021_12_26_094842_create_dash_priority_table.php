<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashPriorityTable extends Migration {

	public function up()
	{
		Schema::create('dash_priority', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('order')->nullable()->default('0');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_priority');
	}
}