<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashProjectTable extends Migration {

	public function up()
	{
		Schema::create('dash_project', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('client_id')->unsigned();
			$table->string('name');
			$table->text('description')->nullable();
			$table->string('status_id');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_project');
	}
}