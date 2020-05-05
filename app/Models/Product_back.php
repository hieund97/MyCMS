<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_back extends Model
{
    protected $table = 'product_back';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
