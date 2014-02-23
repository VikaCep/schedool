<?php

class ClasstypesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('classtypes')->truncate();

		$classtypes = array(
			array('name'=>'Practice'),
			array('name'=>'Theory')
		);

		// Uncomment the below to run the seeder
		DB::table('classtypes')->insert($classtypes);
	}

}
