<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model{
    protected $fillable = ['user_id', 'article_id','published_at'];

    public function user(){
        return $this->belongsTo(\App\User::class,'user_id');
      }
      public function article(){
        return $this->belongsTo(\App\User::class,'article_id');
      }

    
}
