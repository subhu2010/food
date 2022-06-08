<?php 

namespace App\Trait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;


trait ImageUpload{


	public static function singleImageUploadThumb($file, $path){

		$ext  = $file->extension();
		$pics = Image::make($file)->widen(225);

		if(!File::exists($path)){ File::makeDirectory($path); }

		$file_name = 'food-on-ways-image-'.strtolower(Str::random(30)).'.'.$ext;

        $pics->save($path.$file_name);

        return $file_name;

	}


	public static function multipleImageUpload($files, $path){

		$images = [];

		if($files == null || !isset($files)) return $images;

		foreach($files as $file):

			try{

				$ext  = $file->extension();
				$pics = Image::make($file);

				if(!File::exists($path)){ File::makeDirectory($path); }

				$file_name = 'food-in-ways-images-'.strtolower(Str::random(30)).'.'.$ext;

		        $pics->save($path.$file_name);

		        array_push($images, $file_name);

			}catch(Exception $error){

				foreach($iamges as $image):
					@unlink($path.$image);
				endforeach;

			}

		endforeach;

        return $images;

	}



	public static function logoUpload($file){

		$ext  = $file->extension();
		$pics = Image::make($file);

		if(!File::exists("uploads/logo")){ File::makeDirectory("uploads/logo"); }

		$file_name = 'food-in-ways-logo-'.strtolower(Str::random(10)).'.'.$ext;

        $pics->save("uploads/logo/".$file_name);

        return $file_name;

	}


}

