<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceTable extends Migration {

	public function up()
	{
		Schema::create('Invoice', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('project_id')->unsigned();
			$table->text('reference');
			$table->text('description')->nullable();
			$table->integer('status_id')->unsigned();
			$table->string('tva')->nullable();
			$table->string('discount')->nullable();
			$table->text('notes')->nullable();
			$table->text('modalities')->nullable();
			$table->string('client_name')->nullable();
			$table->string('client_adress')->nullable();
			$table->string('client_tel')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('Invoice');
	}
}