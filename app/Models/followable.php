<?php

namespace App\Models;


trait followable
{
    public function following(User $user)
    {
        return $this->follows()->where('follow_user_id', $user->id)->exists();
    }
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }
    public function toggleFollow($user){
        if($this->following($user)){
            $this->unfollow(($user));
        }else{
            $this->follow(($user));
        }
    }
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'follow_user_id');
    }
}
