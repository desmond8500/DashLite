<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceRowTable extends Migration {

	public function up()
	{
		Schema::create('InvoiceRow', function(Blueprint $table) {
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
		Schema::drop('InvoiceRow');
	}
}