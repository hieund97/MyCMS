<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog_Category extends Model
{
    protected $table = 'blog_category';
    protected $guarded = ['id'];

    public function blog(){
        return $this ->hasMany('App\Models\Blog', 'id', 'category_id');
    }
}
