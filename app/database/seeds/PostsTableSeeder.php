<?php 

class PostsTableSeeder extends Seeder {

	public function run() {

		$faker = Faker\Factory::create();

		foreach (range(1,20) as $index) {
			
			Post::create([
				'user_id'=>'1',
				'username'=>'mind',
				'title'=>$faker->sentence(3),
				'slug'=>$faker->sentence(3),
				'body' =>$faker->paragraph(100),
				'picName'=>$faker->randomElement($array = array ('pirmas.jpg','antras.jpg','trecias.jpg')),
				// 'picName'=>$faker->'trecias.jpg',
				// 'picName'=>$faker->imageUrl(200,200),
				'published_at'=>$faker->dateTimeBetween('now', '+7 days'),
				
				]);


		}

	}
}

 ?>