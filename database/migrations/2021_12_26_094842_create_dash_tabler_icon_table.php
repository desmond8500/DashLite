<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashTablerIconTable extends Migration {

	public function up()
	{
		Schema::create('dash_tabler_icon', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('code');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_tabler_icon');
	}
}