<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_Method extends Model
{
    protected $table = 'payment_method';
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'pay_id', 'id');
    }
}
