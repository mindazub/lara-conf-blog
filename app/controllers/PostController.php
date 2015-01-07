<?php 

class PostController extends BaseController{

	public function getShow($slug){
		
		// $post = Post::where('slug', '=', $slug)->firstOrFail();
		$post = Post::where('slug', '=', $slug)->orderBy('published_at', 'DESC')->firstOrFail();

		return View::make('posts.show')->with('post', $post);
	}
}


 ?>