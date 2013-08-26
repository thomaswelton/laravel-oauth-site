<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOauthprovidersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oauth_providers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('site');
			$table->string('dev_site');
			$table->string('icon_font');
			$table->decimal('spec', 2, 1);
			$table->integer('featured');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oauth_providers');
	}

}
