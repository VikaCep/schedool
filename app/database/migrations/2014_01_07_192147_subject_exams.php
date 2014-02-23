<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubjectExams extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	/*
	user_subject_id
	test_name
	test_date
	test_comment

	*/
	public function up()
	{
		Schema::create('subject_exams', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('subject_id')->unsigned();
			$table->string('name', 40);
			$table->date('date', 40);
			$table->text('comment');
			$table->timestamps();
			$table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_subject_tests');
	}

}
