<?php

namespace App\Http\Controllers;
use App\Http\Requests\storeUpdate as storeUpdate;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\User as RequestsUser;


class ProfileController extends Controller
{
    //
    public function show(User $user)
    {
        return view('keyqeen.show', compact('user'));
    }
    public function edit(User $user)
    {
        return view('keyqeen.edit', compact('user'));
    }
    public function update(storeUpdate $request,User $user)
    {
        $password = bcrypt(request('password'));
        $file = $request->file('avatar');
        $file_img=$file->getClientOriginalName();
        $path = $file->move('public/images/', $file_img);
        User::where('name',$user->name)->update([
            'name' => $request->input('name'),
            'password' => $password,
            'email' => $request->input('email'),
            'avatar_user' => $file_img,
        ]);
        if (request('password') == '') {
            $user['password'] = $user->password;
            $user['avatar_user'] = $file_img;
        } else {
            $user['password'] = $password;
            $user['avatar_user'] = $file_img;
        }
        $user->update();
        return view('dashboard',compact($user));
    }
}
