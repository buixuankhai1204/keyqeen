<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //
    public function index(){
      $list_follow=auth()->user()->follows;
      return view('explore',['list_follow'=>$list_follow]);
    }
}
