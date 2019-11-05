<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{  
    protected $fillable = ["title", "description", "content","img","so_like","user_id" ,"category_id"];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
