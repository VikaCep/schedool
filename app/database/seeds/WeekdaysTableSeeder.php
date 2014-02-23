<?php

class WeekdaysTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('weekdays')->truncate();

		$weekdays = array(
			array('name'=>'Monday'),
			array('name'=>'Tuesday'),
			array('name'=>'Wednesday'),
			array('name'=>'Thursday'),
			array('name'=>'Friday'),
			array('name'=>'Saturday'),
			array('name'=>'Sunday')
		);

		// Uncomment the below to run the seeder
		 DB::table('weekdays')->insert($weekdays);
	}

}
