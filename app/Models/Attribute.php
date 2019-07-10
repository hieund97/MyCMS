<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $table = 'attribute';
    protected $guarded = ['id'];

    public function value()
    {
        return $this->hasMany('App\Models\Value', 'attr_id', 'id');
    }
}
