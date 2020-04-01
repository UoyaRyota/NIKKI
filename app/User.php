<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','img_name','password','occupation','self_introduction','post','favorite'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles(){
        return $this->hasMany(\App\Article::class,'user_id','id');
       }

    public function comments(){
        return $this->hasMany(\App\Comment::class,'user_id','id');
       }
    public function likes(){
    return $this->hasMany(\App\Like::class,'user_id','id');
    }

    
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
    
    
}
