<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "blog_posts";

    public function category() {
    	return $this->hasOne('App\Models\Blog\Category');
    }

    public function author() {
    	return $this->hasOne('App\Models\Admin');
    }
}
