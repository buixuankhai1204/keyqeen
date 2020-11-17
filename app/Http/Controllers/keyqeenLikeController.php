<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyqeen;
class keyqeenLikeController extends Controller
{
    //
    public function store(Keyqeen $keyqeen){
        $keyqeen->like(auth()->user());
        return back();
    }
    public function destroy(Keyqeen $keyqeen){
        $keyqeen->dislike(auth()->user());
        return back();
    }
}
