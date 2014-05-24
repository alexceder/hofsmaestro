<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('events', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('host');
            $table->text('description');
            $table->integer('num_people');
            $table->integer('max_num_people');
            $table->string('location');
            $table->integer('town');
            $table->boolean('private');
            $table->integer('type');
            $table->timestamp('time');
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
        Schema::drop('events');
	}

}
