<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectClass extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	/*
	id_weekday
	time
	id_type*/
	public function up()
	{
		Schema::create('subject_class', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('weekday_id')->unsigned();
			$table->integer('subject_id')->unsigned();
			$table->integer('classtype_id')->unsigned();
			$table->foreign('weekday_id')->references('id')->on('weekdays')->onDelete('cascade')->onUpdate('cascade');			
			$table->foreign('classtype_id')->references('id')->on('classtypes')->onDelete('cascade')->onUpdate('cascade');					
			$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');					
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
		Schema::drop('subject_class');
	}

}
