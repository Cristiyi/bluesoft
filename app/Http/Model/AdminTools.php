<?php

namespace App\Http\Model;
use Illuminate\Database\Eloquent\Model;

class AdminTools extends Model {

  //图片上传
  public static function uploads($file) {

    $allow = ['png', 'jpg', 'jpeg', 'PNG', 'JPG', 'JPEG'];

    $extension = $file -> getClientOriginalExtension();

    if($extension && !in_array($extension, $allow)) {
      return back() -> with('errors', '请上传png,jpg,jpeg');
    }

    $destination = 'uploads/resource/';

    $filename = str_random(10). '.' .$extension;

    $file->move($destination, $filename);

    $filePath = asset($destination.$filename);

    return $filePath;

  }

}
