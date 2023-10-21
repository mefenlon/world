<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimezonesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if(config('world.modules.timezones')){
			Schema::create(config('world.migrations.timezones.table_name'), function (Blueprint $table) {
				$table->id();
				$table->foreignId('country_id');
				$table->string('name');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if(config('world.modules.timezones')){
			Schema::dropIfExists(config('world.migrations.timezones.table_name'));
		}
	}
}
