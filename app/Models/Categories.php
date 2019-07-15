<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'Categories';
    protected $guarded = ['id'];

    public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }
}
