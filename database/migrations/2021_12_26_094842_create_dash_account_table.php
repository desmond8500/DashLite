<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashAccountTable extends Migration {

	public function up()
	{
		Schema::create('dash_account', function(Blueprint $table) {
			$table->increments('id');
			$table->string('firstname')->nullable();
			$table->integer('user_id')->unsigned();
			$table->string('lastname')->nullable();
			$table->smallInteger('gender')->default('1');
			$table->tinyInteger('status')->default('0');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_account');
	}
}