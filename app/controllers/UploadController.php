<?php  


class UploadController extends Controller {

public function getUpload(){
	

	return View::make('upload.index');
}

public function postUpload(){
	

$image = Input::file('image');
	// var_dump(get_class_methods(Input::file('image')));
	//
	echo $filename = $image->getClientOriginalName();
		$dest = 'img/upload';
		// pavyzdys $filename = date('d-m-Y+H-i-s')."+".$image->getClientOriginalName();
		$name = date('Y-m-d_H-i-s').'_'.Input::file('image')->getClientOriginalName();
		// $name = time().'_'.Input::file('image')->getClientOriginalName();
		if (Input::file('image')->move($dest,$name)) {

			return Redirect::route('getUpload')->with('success', 'File been uploaded.');

		}else{
			echo 'Something went wrong';
		}

		

/*
Cia resize pvz.:
http://laravel.io/forum/06-30-2014-update-image-using-intervention
*/
 // $image = Input::file('image');
 // $filename  = time() . '.' . $image->getClientOriginalExtension();
 // $path = public_path('img/products/' . $filename);
 // Image::make($image->getRealPath())->resize(468, 249)->save($path);
 // $product->image = 'img/products/'.$filename;
 // $product->save();



	}
	


}



?>

