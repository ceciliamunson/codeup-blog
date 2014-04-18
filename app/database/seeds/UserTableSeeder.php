<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'ceci_ugarte@hotmail.com';
		$user->password = 'codeup';
		$user->role_id = '1';
		$user->first_name = 'Cecilia';
		$user->last_name = 'Munson';
		$user->save();
	}
}