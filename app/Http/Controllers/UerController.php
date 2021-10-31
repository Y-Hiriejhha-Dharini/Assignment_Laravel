<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UerController extends Controller
{
  public function profile($id)
  {
    $data = User::find($id);
    return view('profile',['user'=>$data]);
  }
}
