<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attr_Order extends Model
{
    protected $table = 'attr_order';
    protected $guarded = ['id'];

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    
}
