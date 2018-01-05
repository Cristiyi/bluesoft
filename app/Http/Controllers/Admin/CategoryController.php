<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Category;

class CategoryController extends Controller
{

  protected $category;

  public function __construct() {

    $this -> category = new Category();

  }

  public function cateList() {

    $data = $this -> category -> tree();

    $data = $this -> category -> getTree($data,'cate_name','cate_id','cate_pid',0);

    return view('admin.catelist') -> with('data', $data);

  }

  public function cateAdd() {

    $input = Input::except('_token');

    if($input) {

      if($re = $this -> category -> create($input)) {
        return redirect('admin/catelist');
      } else {
        return back() -> with('errors','数据填充失败');
      }

    } else {

      $pcate = $this -> category -> getPid();

      return view('admin.cateadd') -> with('pcate', $pcate);

    }


  }

  public function cateDel() {

    $cate_id = Input::get('id');
    $str = explode(",", $cate_id);

    // foreach($str as $v){
    //   $this -> category -> where('cate_id',"=","$v")->delete();
    //  }
    $this -> category -> whereIn('cate_id', $str) -> delete();

    return redirect('admin/catelist');

  }

  public function cateEdit($cate_id) {

    $input = Input::except('_token');

    if($input) {

      $re = $this -> category -> where('cate_id', $cate_id) -> update($input);

      if($re) {

        return redirect('admin/catelist');

      } else {

        return back() -> with('errors', '数据修改失败');

      }

    } else {

      $pcate = $this -> category -> getPid();

      $data = $this -> category -> find($cate_id);

      // dd($data);

      return view('admin.cateedit', compact('pcate', 'data'));

    }

  }

  public function cateDestroy($cate_id) {

    $deleted = $this -> category -> where('cate_id',$cate_id) -> delete();

    if($deleted) {

      return redirect('admin/catelist');

    }

  }

}
