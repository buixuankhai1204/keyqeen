<?php

namespace App\Http\Controllers;

use App\Http\Requests\keyqeen as RequestsKeyqeen;
use Illuminate\Http\Request;

use App\Models\Keyqeen;


class KeyqeenController extends Controller
{
    //
    public function show(){
        return view(
            'dashboard',
            ['keyqeen' => auth()->user()->timeline()]
        );
    }
    public function store(RequestsKeyqeen $request){
        Keyqeen::create([
            'user_id'=>auth()->user()->id,
            'body'=> Request('body')
        ]);
        return redirect('/home')->with('success','đăng bài thành công');
    }
    public function login(){
        
        auth()->logout();
        return view('auth.login');
    }
    public function register(){
        
        auth()->logout();
        return view('auth.register');
    }
}
