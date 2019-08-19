<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsToMany('App\Models\Product', 'product_order_pivot', 'order_id', 'product_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function ship()
    {
        return $this->belongsTo('App\Models\Ship_Method', 'ship_id', 'id');
    }

    public function pay()
    {
        return $this->belongsTo('App\Models\Payment_Method', 'pay_id', 'id');
    }

    public function guest()
    {
        return $this->belongsTo('App\Models\Guest', 'guest_id', 'id');
    }

    public function attr_order()
    {
        return $this->hasMany('App\Models\Attr_Order', 'order_id', 'id');
    }
}
