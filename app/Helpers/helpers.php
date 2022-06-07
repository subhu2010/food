<?php

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

function uploadImage($image, $directory, $width, $height)
{
    $path = public_path() . "/uploads/" . $directory;
    if (!File::exists($path)) {
        File::makeDirectory($path, 0777, true, true);
    }
    $filename = $directory . "-Image" . now()->timestamp . rand(0, 99) . "." . $image->extension();
    $success = Image::make($image)->resize($width, $height)->save($path . "/" . $filename);
    return $success ? $filename : false;
}

function deleteImage($image, $directory)
{
    if ($image != null && file_exists(public_path() . "/uploads/" . $directory . "/" . $image)) {
        unlink(public_path() . "/uploads/" . $directory . "/" . $image);
    }
}
