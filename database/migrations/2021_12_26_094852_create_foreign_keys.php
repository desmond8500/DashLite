<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('dash_project', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('dash_client')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('dash_invoice', function(Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('dash_project')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('dash_invoice', function(Blueprint $table) {
			$table->foreign('status_id')->references('id')->on('dash_status')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dash_invoice_row', function(Blueprint $table) {
			$table->foreign('invoice_id')->references('id')->on('dash_invoice')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('dash_invoice_row', function(Blueprint $table) {
			$table->foreign('priority_id')->references('id')->on('dash_priority')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dash_article', function(Blueprint $table) {
			$table->foreign('provider_id')->references('id')->on('dash_provider')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('dash_article', function(Blueprint $table) {
			$table->foreign('brand_id')->references('id')->on('dash_brand')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('dash_project', function(Blueprint $table) {
			$table->dropForeign('dash_project_client_id_foreign');
		});
		Schema::table('dash_invoice', function(Blueprint $table) {
			$table->dropForeign('dash_invoice_project_id_foreign');
		});
		Schema::table('dash_invoice', function(Blueprint $table) {
			$table->dropForeign('dash_invoice_status_id_foreign');
		});
		Schema::table('dash_invoice_row', function(Blueprint $table) {
			$table->dropForeign('dash_invoice_row_invoice_id_foreign');
		});
		Schema::table('dash_invoice_row', function(Blueprint $table) {
			$table->dropForeign('dash_invoice_row_priority_id_foreign');
		});
		Schema::table('dash_article', function(Blueprint $table) {
			$table->dropForeign('dash_article_provider_id_foreign');
		});
		Schema::table('dash_article', function(Blueprint $table) {
			$table->dropForeign('dash_article_brand_id_foreign');
		});
	}
}