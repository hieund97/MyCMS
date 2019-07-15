<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $table = 'variant';
    protected $guarded = ['id'];

    public function value()
    {
        return $this->belongsToMany('App\Models\value', 'variant_value', 'variant_id', 'value_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
