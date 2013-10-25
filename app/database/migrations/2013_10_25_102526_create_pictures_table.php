<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pictures', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->dateTime("date");
            $table->boolean('coverPhoto');
            $table->text('picLocation');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pictures', function(Blueprint $table)
		{
            Schema::dropIfExists("pictures");
		});
	}

}