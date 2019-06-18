<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $guarded = ['id'];

    public function blog_category(){
        return $this->belongsTo('App\Models\Blog_Category', 'category_id', 'id');
    }
}
