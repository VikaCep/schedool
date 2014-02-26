<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('WeekdaysTableSeeder');
		$this->call('ClasstypesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('SubjectsTableSeeder');
		$this->call('User_subject_testsTableSeeder');
		$this->call('UsersubjecttestsTableSeeder');
		$this->call('UsersubjectexamsTableSeeder');
		$this->call('SubjectexamsTableSeeder');
		$this->call('SubjectclassesTableSeeder');
		$this->call('Subject_classesTableSeeder');
		$this->call('ClassesTableSeeder');
		$this->call('LessonsTableSeeder');
	}

}