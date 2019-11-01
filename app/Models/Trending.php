<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
    protected $table = 'trending';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->hasMany('App\Models\Product', 'trending_id', 'id');
    }
}
