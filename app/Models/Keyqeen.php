<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyqeen extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'keyqeens';
    protected $fillable = [
        'user_id',
        'body'
    ];
    public function User(){
       return  $this->belongsTo('App\Models\User');
    }
}
