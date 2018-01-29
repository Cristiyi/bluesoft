<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Model\Resource;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;
class ResourceController extends Controller {

  public function allResource($limit=4, $page=1) {

    $skip = ($page - 1) * $limit;
    $all_resource = Resource::orderBy('re_id','desc') -> limit($limit) -> skip($skip) -> get();
    return response() -> json(['info'=>'succ', 'data'=>$all_resource], 200);

  }

  public function cateResource($cid, $limit=5, $page=1) {

    $skip = ($page - 1) * $limit;
    $cate_resource = Resource::where('re_cateid', $cid) -> orderBy('re_id', 'desc') -> limit($limit) -> skip($skip) -> get();
    return response() -> json(['info'=>'succ', 'data'=>$cate_resource], 200);

  }

}
