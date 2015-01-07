<?php 

class UsersTableSeeder extends Seeder {

	public function run() {

		User::create([
				'user_id'=>1,
				'email'=>'mind.azub@gmail.com',
				'username' =>'mind',
				'password'=>Hash::make('aaa000')				
				]);

	}
}

 ?>