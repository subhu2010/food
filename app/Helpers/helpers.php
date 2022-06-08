<?php

use File;
use Image;
use Illuminate\Support\Str;


function uploadImage($image, $directory, $width, $height){

    $path = public_path() . "/uploads/" . $directory;

    if(!File::exists($path)):
        File::makeDirectory($path, 0777, true, true);
    endif;

    $filename = $directory."-image" . strtolower(Str::random(15)).".".$image->extension();
    $success = Image::make($image)->resize($width, $height)->save($path . "/" . $filename);

    return $success?$filename:false;

}


function deleteImage($image, $directory){

    if($image != null && file_exists(public_path() . "/uploads/" . $directory . "/" . $image)):
        unlink(public_path()."/uploads/".$directory."/".$image);
    endif;


}
