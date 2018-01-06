<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Resource;
use App\Http\Model\Category;
use App\Http\Model\AdminTools;

class ResourceController extends Controller
{

  protected $resource;

  protected $category;

  protected $request;

  public function __construct() {

    $this -> resource = new Resource();

    $this -> category = new Category();

    $this -> request = new Request();

  }

  public function reList() {

    $input = Input::except('_token');

    if($input) {

      $resource = $this -> resource -> where('re_name', 'like', '%'.$input['re_name']."%") -> get();

    } else {

      $resource = $this -> resource -> orderBy('re_cateid', 'asc') -> get();

    }

    return view('admin.relist') -> with('resource', $resource);

  }

  public function reAdd() {

    $input = Input::except('_token');

    if($input) {

      $capture = Input::file('re_capture');
      $qcode = Input::file('re_qcode');

      if($capture) {
        $re_capture = AdminTools::uploads($capture);
        $input['re_capture'] = $re_capture;
      }

      if($qcode) {
        $re_qcode = AdminTools::uploads($qcode);
        $input['re_qcode'] = $re_qcode;
      }

      $cate_id = $this -> category -> where('cate_name', $input['re_cate']) -> first();

      $input['re_cateid'] = $cate_id -> cate_id;

      $re = $this -> resource -> create($input);

      if($re) {

        return redirect('admin/relist');

      } else {

        return back() -> with('errors', '添加失败请重新尝试');

      }

    } else {

      $pcatename = $this -> category -> tree();

      $pcatename = $this -> category -> getTree($pcatename,'cate_name','cate_id','cate_pid',0);

      return view('admin.readd') -> with('pcatename', $pcatename);

    }

  }

  public function reDel() {

    $re_id = Input::get('id');

    $str = explode(',', $re_id);

    $this -> resource -> whereIn('re_id', $str) -> delete();

    return redirect('admin/relist');

  }

  public function reEdit($re_id) {

    $input = Input::except('_token');

    if($input) {

      $re = $this -> resource -> where('re_id', $re_id) -> update($input);

      if($re) {

        return redirect('admin/relist');

      } else {

        return back() -> with('errors', '修改失败请重试');

      }

    } else {

      $pcatename = $this -> category -> tree();

      $pcatename = $this -> category -> getTree($pcatename,'cate_name','cate_id','cate_pid',0);

      $data = $this -> resource -> find($re_id);

      return view('admin.reedit', compact('pcatename', 'data'));

    }

  }

  public function reDestroy($re_id) {

    $deleted = $this -> resource -> where('re_id', $re_id) -> delete();

    if($deleted) {
      return redirect('admin/relist');
    }

  }

}
