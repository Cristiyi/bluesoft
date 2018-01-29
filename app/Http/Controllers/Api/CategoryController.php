<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\Category;
use App\Http\Model\Resource;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller {

  protected $request;

  public function __contruct($request) {
    $this -> request = new Reuqest();
  }

  public function plist() {

    $pcate = Category::where('cate_pid', '0') -> get();
    return response() -> json(['info'=>'succ','data'=>$pcate], 200);

  }

  public function chlist($pid) {

    $chlist = Category::where('cate_pid', $pid) -> get();
    return response() -> json(['info'=>'succ','data'=>$chlist], 200);

  }

  public function allChlist() {
    $allch = Category::where('cate_pid','!=', '0') -> get();

    foreach($allch as $key => $value) {

      $allch[$key]['count'] = Resource::where('re_cateid', $value['cate_id']) -> count();

    }
    return response() -> json(['info'=>'succ','data'=>$allch], 200);
  }

}
