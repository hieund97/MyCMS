<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image_product extends Model
{
    protected $table = 'image_product';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
