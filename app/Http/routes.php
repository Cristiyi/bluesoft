<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::any('admin/login', 'Admin\AdminController@login');

// Route::post('admin/dologin', 'Admin\AdminController@doLogin');

Route::group(['middleware'=>['admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function() {

  Route::any('logout', 'AdminController@logout');

  Route::get('index', 'IndexController@index');

  Route::get('catelist', 'CategoryController@cateList');

  Route::any('cateadd', 'CategoryController@cateAdd');

  Route::any('catedel', 'CategoryController@cateDel');

  Route::any('cateedit/{cate_id}', 'CategoryController@cateEdit');

  Route::get('catedestroy/{cate_id}', 'CategoryController@cateDestroy');

  Route::get('relist', 'ResourceController@reList');

  Route::any('readd', 'ResourceController@reAdd');

  Route::any('redel', 'ResourceController@reDel');

  Route::any('reedit/{re_id}', 'ResourceController@reEdit');

  Route::get('redestroy/{re_id}', 'ResourceController@reDestroy');

  Route::get('comlist', 'CommentController@comList');

});
