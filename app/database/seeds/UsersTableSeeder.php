<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('users')->truncate();
		
        User::create(array(
            'username' => 'firstuser',
            'email' => 'vika@vika.com',
            'password' => Hash::make('firstpass')
        ));
 
        User::create(array(
            'username' => 'seconduser',
            'email' => 'vika2@vika2.com',
            'password' => Hash::make('secondpass')
        ));

		// Uncomment the below to run the seeder
		// DB::table('users')->insert($users);
	}

}
