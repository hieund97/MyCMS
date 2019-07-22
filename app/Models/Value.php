<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    protected $table = 'values';
    protected $guarded = ['id'];

    public function attribute()
    {
        return $this->belongsTo('App\Models\Attribute', 'attr_id', 'id');
    }

    public function product()
    {
        return $this->belongsToMany('App\Models\Product', 'values_product', 'value_id', 'product_id');
    }
}
