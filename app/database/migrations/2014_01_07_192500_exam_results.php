<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExamResults extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	/*
	user_subject_test_id
	test_result
	*/
	public function up()
	{
		Schema::create('exam_results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('subject_exam_id')->unsigned();
			$table->string('result', 40);
			$table->timestamps();
			$table->foreign('subject_exam_id')->references('id')->on('subject_exams')->onDelete('cascade')->onUpdate('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_subject_result');
	}

}
