<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categories';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsToMany('App\Models\Product', 'category_product_privot', 'category_id', 'product_id');
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Categories', 'parent_id');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Categories', 'parent_id');
    }
}
