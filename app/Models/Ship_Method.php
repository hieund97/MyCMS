<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ship_Method extends Model
{
    protected $table = 'ship_method';
    protected $guarded = ['id'];

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'ship_id', 'id');
    }
}
