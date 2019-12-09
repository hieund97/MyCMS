<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'reply';
    protected $guarded = ['id'];

    public function review()
    {
        return $this->belongsTo('App\Models\Review', 'comment_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    
    public function guest()
    {
        return $this->belongsTo('App\Models\Guest', 'guest_id', 'id');
    }
}
