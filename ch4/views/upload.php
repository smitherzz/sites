<?php
//complete source code for views/upload.php
$newImageSubmitted = isset( $_POST['new-image']);
if ($newImageSubmitted){
  //this runs if form was submitted
  $output = upload();
} else {
  //this runs if form was NOT submitted
  $output = include_once "views/upload-form.php";
}
return $output;

function upload() {
  include_once "classes/Uploader.class.php";

  $uploader = new Uploader( "image-data" );
  $uploader->saveIn("img");
  $fileUploaded = $uploader->save();
  if ( $fileUploaded) {
    $out = "new file uploaded";
  } else {
    $out = "something went wrong";
  }
  return $out;
}

