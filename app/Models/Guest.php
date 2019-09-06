<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guest';
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'order_id', 'id');
    }

    public function review()
    {
        return $this->hasMany('App\Models\review', 'guest_id', 'id');
    }
}
