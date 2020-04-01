<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $fillable = ['user_id', 'title', 'img_article','movie_link'.'comment','method','phrase','goal','published_at', 'image'];

  public function comments(){
   return $this->hasMany(\App\Comment::class,'article_id','id');
  }

  public function likes(){
    return $this->hasMany(\App\Like::class,'article_id');
   }

  public function user(){
    return $this->belongsTo(\App\User::class,'user_id');
  }

}
