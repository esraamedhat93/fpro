<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserName(){
        return "sososososo";
    }
    public function getindex(){
      $data=[];
      $data['id']=6;
      $data['name']='body';
      return view('welcome',$data);


    }
}
