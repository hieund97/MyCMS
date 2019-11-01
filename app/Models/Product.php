<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $guarded = ['id'];


    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories', 'category_product_pivot', 'product_id', 'category_id');
    }

    public function value()
    {
        return $this->belongsToMany('App\Models\Value', 'values_product', 'product_id', 'value_id');
    }

    public function variant()
    {
        return $this->hasMany('App\Models\Variant', 'product_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }

    public function image_product()
    {
        return $this->hasMany('App\Models\Image_product', 'product_id', 'id');
    }

    public function order()
    {
        return $this->belongsToMany('App\Models\Order', 'product_order_pivot', 'product_id', 'order_id');
    }

    public function attr_order()
    {
        return $this->hasMany('App\Models\Attr_Order', 'product_id', 'id');
    }
    
    public function review()
    {
        return $this->hasMany('App\Models\Review', 'product_id', 'id');
    }

    public function trending()
    {
        return $this->belongsTo('App\Models\Trending', 'trending_id', 'id');
    }
}
