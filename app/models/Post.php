<?php 

class Post extends Eloquent {

	protected $fillable = array('title', 'body');

	public function user(){
		return $this->belongsTo('User');
	}
}



 ?>


