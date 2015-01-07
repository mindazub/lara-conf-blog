<?php 

class UsersTableSeeder extends Seeder {


	public function run() {

		DB::table('users')->delete();


		User::create([
				'user_id'=>'1',
				'email'=>'mind.azub@gmail.com',
				'username' =>'mind',
				'password'=>'aaa000'			
				// 'password'=>Hash::make('aaa000')				
				]);

	}
}

 ?>