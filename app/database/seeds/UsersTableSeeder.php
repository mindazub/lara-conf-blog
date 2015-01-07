<?php 

class UsersTableSeeder extends Seeder {


	public function run() {

		DB::table('users')->delete();

		$faker = Faker\Factory::create();

		User::create([
				'user_id'=>'1',
				'email'=>'mind.azub@gmail.com',
				'username' =>'mind',
				'password'=>'aaa000',
				'active'=>'1',			
				// 'password'=>Hash::make('aaa000')				
				]);

		foreach (range(2,10) as $index) {
		User::create([
			'user_id'=>$index,
				'email'=>$faker->email,
				'username' =>$faker->userName,
				'password'=>'aaa000'			
				// 'password'=>Hash::make('aaa000')	
			]);
							
		}

		

	}
}

 ?>