<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $guarded = ['id'];


    public function categories()
    {
        return $this->belongsToMany('App\Models\Categories', 'category_product_privot', 'product_id', 'category_id');
    }

    public function value()
    {
        return $this->belongsToMany('App\Models\value', 'values_product', 'product_id', 'value_id');
    }

    public function variant()
    {
        return $this->hasMany('App\Models\Variant', 'product_id', 'id');
    }
}
