<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArticleTable extends Migration {

	public function up()
	{
		Schema::create('Article', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('reference')->default('_');
			$table->text('description')->nullable();
			$table->float('price', 8,2)->nullable();
			$table->integer('provider_id')->unsigned()->nullable();
			$table->integer('brand_id')->unsigned()->nullable();
			$table->string('image')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Article');
	}
}