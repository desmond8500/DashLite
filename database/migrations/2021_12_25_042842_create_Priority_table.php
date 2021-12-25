<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriorityTable extends Migration {

	public function up()
	{
		Schema::create('Priority', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->integer('order')->nullable()->default('0');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Priority');
	}
}