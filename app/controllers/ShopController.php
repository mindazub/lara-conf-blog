<?php

class ShopController extends \BaseController {

	public function getShop(){
		return View::make('shop.index');
	}

}

?>