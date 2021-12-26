<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashProviderTable extends Migration {

	public function up()
	{
		Schema::create('dash_provider', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('Description')->nullable();
			$table->string('address')->nullable();
			$table->string('email')->nullable();
			$table->string('tel')->nullable();
			$table->string('logo')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_provider');
	}
}