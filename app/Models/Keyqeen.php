<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyqeen extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'keyqeens';
    protected $fillable = [
        'user_id',
        'body'
    ];
    public function User()
    {
        return  $this->belongsTo('App\Models\User');
    }
    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' =>$user? $user->id :auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }
    public function dislike($user=null)
    {
        return $this->like($user,false);
    }
    public function likes()
    {
        return  $this->hasMany(Like::class);
    }
    public function islikeBy(User $user)
    {
        return (bool) $user->likes->where('keyqeen_id',$this->id)->where('liked',true)->count();
    }
    public function isdislikeBy(User $user)
    {
        return (bool) $user->likes->where('keyqeen_id',$this->id)->where('liked',false)->count();
    }
    public function scopeWithLikes(Builder $query){
        $query->leftJoinSub(
            'select keyqeen_id, sum(liked) likes,sum(!liked) dislikes from likes group by keyqeen_id',
            'likes',
            'likes.keyqeen_id',
            'keyqeens.id',
        );
    }
}
