<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Article extends Model
{


   protected $table = "articles";
    protected $fillable = [
        'title', 'description','title_ar', 'description_ar', 'image' , 'video' , 'keywords'
    ];


    public function getImageAttribute($value) {
        return ($value) ? \Storage::url("app/public/".$value) : null;
    }

    public function getVideoAttribute($value) {
        return ($value) ? \Storage::url("app/public/".$value) : null;
    }

}
