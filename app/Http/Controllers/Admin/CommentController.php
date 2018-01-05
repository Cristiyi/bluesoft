<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Model\Comment;

class CommentController extends Controller
{

  $protected $comment;

  public function __construct() {

    $this ->　comment = new Comment();

  }

  public function comList() {

    $com = $this -> comment -> get();

    return view('admin.comlist') -> with('com', $com);

  }

}
