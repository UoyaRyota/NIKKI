<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $fillable = ['user_id', 'article_id', 'post'];

  public function user(){
    return $this->belongTo(App\User::class,'user_id');
  }
}
