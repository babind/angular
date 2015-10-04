<?php namespace App\Acme\Library;

use Illuminate\Database\Eloquent\Model;

class Upload

private $allowed_ext  = ['jpg','tif','jpeg','gif','png'];

private $model_class = "Model";

/* Incomplete class */
{

	function upload($file,$upload_path)
	{
		$file = $request->get('file');


		$size = $file->getClientOriginalSize();


		$extension = strtolower($file->getClientOriginalExtension());


		if(in_array($extension, $allowed_ext ===false))
		{
			throw new Exception(' file Extension not supported');
		}

		$filename = time().str_random(1000,9999).$extension;


		if(is_subclass_of($model_class,User))


		$class_name = strtolower(get_class($model));



		$upload_path = public_path().'/'.$class_name.'/'."upload";

		if(file_exists($upload_path))
		{

			return $error;

		}	

		$file->move($filename,$upload_path);

		$successs = array(
				$filename =>$file_new,
				$message=>$custom_message,
				);


	}
	  $photo = $this->photo;
		   $uplaod = $photo::upload($file,$upload_path);


}


