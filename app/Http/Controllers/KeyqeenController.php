<?php

namespace App\Http\Controllers;

use App\Http\Requests\keyqeen as RequestsKeyqeen;
use Illuminate\Http\Request;
use App\Models\Keyqeen;


class KeyqeenController extends Controller
{
    //
    public function store(RequestsKeyqeen $request){
        Keyqeen::create([
            'user_id'=>auth()->user()->id,
            'body'=> Request('body')
        ]);
        return redirect('/dashboard')->with('success','đăng bài thành công');
    }
}