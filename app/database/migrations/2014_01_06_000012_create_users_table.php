<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table("users", function($table) {
            $table->create();
            $table->increments("id");
            $table->string("username", 20)->unique();
            $table->string("firstname", 40);
            $table->string("lastname", 40);
			$table->string("email", 50)->unique();
			$table->string("password",64);
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
        Schema::drop("users");
	}

}