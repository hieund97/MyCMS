<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ValueProduct extends Model
{
    protected $table = 'values_product';
    protected $guarded = ['id'];

    public function attribute()
    {
        return $this->belongsTo('App\Models\Value', 'value_id', 'id');
    }
}
