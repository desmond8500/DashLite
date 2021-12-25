<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Project', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('Client')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Invoice', function(Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('Project')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Invoice', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('Status')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('InvoiceRow', function(Blueprint $table) {
			$table->foreign('invoice_id')->references('id')->on('Invoice')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('InvoiceRow', function(Blueprint $table) {
			$table->foreign('priority_id')->references('id')->on('Priority')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Article', function(Blueprint $table) {
			$table->foreign('provider_id')->references('id')->on('Provider')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('Article', function(Blueprint $table) {
			$table->foreign('brand_id')->references('id')->on('Brand')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Project', function(Blueprint $table) {
			$table->dropForeign('Project_client_id_foreign');
		});
		Schema::table('Invoice', function(Blueprint $table) {
			$table->dropForeign('Invoice_project_id_foreign');
		});
		Schema::table('Invoice', function(Blueprint $table) {
			$table->dropForeign('Invoice_status_id_foreign');
		});
		Schema::table('InvoiceRow', function(Blueprint $table) {
			$table->dropForeign('InvoiceRow_invoice_id_foreign');
		});
		Schema::table('InvoiceRow', function(Blueprint $table) {
			$table->dropForeign('InvoiceRow_priority_id_foreign');
		});
		Schema::table('Article', function(Blueprint $table) {
			$table->dropForeign('Article_provider_id_foreign');
		});
		Schema::table('Article', function(Blueprint $table) {
			$table->dropForeign('Article_brand_id_foreign');
		});
	}
}