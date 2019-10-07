<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user(){
        return $this->belongsTo(\App\User::class);
    }

    public function category(){
        return $this->belongsTo(\App\Category::class);
    }

    public function tag(){
        return $this->belongsToMany(\App\Tag::class);
    }
}
