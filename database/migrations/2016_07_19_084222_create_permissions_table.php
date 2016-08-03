<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permissions', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('role_id')->unsigned();
			$table->string('permission');
			$table->string('description')->nullable();
		});

		Schema::create('role_user', function (Blueprint $table) {
			$table->integer('role_id')->unsigned();
			$table->integer('user_id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('role_user');
		Schema::dropIfExists('permissions');
	}
}
