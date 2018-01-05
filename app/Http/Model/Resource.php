<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{

  protected $table = "resource";
  protected $primaryKey = "re_id";
  public $timestamps = false;
  protected $guarded = ['_token'];

}
