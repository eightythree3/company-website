<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ArticleComment extends Model
{


   protected $table = "article_comments";
    protected $fillable = [
        'article_id','comment' , 'permission_view'
    ];


  public function article(){
      return $this->belongsTo("App\Article" , "article_id");
  }

}
