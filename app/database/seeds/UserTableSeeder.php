<?php

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = 'jason@codeup.com';
		$user->password = Hash::make('letjasonin');
		$user->save();
	}
}