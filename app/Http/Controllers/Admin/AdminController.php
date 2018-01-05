<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Model\Admin;

class AdminController extends Controller
{

  public function login() {

    if($input = Input::all()) {

      $admin = Admin::first();

      if($admin->admin_name != $input['admin_name'] || $admin->admin_password!= $input['admin_password']){

        return back()->with('msg','用户名或者密码错误！');

      } else {

        session(['admin'=>$admin]);
        return redirect('admin/index');

      }

      return json_encode($result);

    } else {

      return view('admin/login');

    }


  }

//   public function doLogin() {
//
//     if($input = Input::all()) {
//
//       $admin = Admin::first();
//
//       if($admin -> admin_name != $input['admin_name'] || $admin -> admin_password != $input['admin_passwrod']) {
//
//         $result = array('msg'=>'用户名或密码错误','status'=>'false');
//
//       } else {
//
//         session(['user'=>$user]);
//         $result = array('msg'=>'登录成功','status'=>'true');
//
//       }
//
//     }
//
//     return json_encode($result);
//
//   }
//
// }
}
