<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDashInvoiceRowTable extends Migration {

	public function up()
	{
		Schema::create('dash_invoice_row', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('invoice_id')->unsigned();
			$table->string('name');
			$table->text('reference');
			$table->integer('quantity');
			$table->string('price');
			$table->integer('priority_id')->unsigned();
			$table->tinyInteger('coef');
			$table->string('section');
			$table->string('article_id')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('dash_invoice_row');
	}
}