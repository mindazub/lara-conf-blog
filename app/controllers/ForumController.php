<?php

class ForumController extends \BaseController {

	public function getForum(){
		return View::make('forum.index');
	}

}