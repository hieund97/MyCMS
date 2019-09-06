<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];
    protected $date = [
        'created_at', 'updated_at'
    ];
    // protected $fillable = [
    //     'first_name', 'email', 'password', 'last_name', 'user_name', 'address', 'city', 'country', 'postal_code', 'about_me', 'phone'
    // ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function blog(){
        return $this ->hasMany('App\Models\Blog', 'id', 'user_id');
    }

    public function order()
    {
        return $this->hasMany('App\Models\Order', 'order_id', 'id');
    }
    
    public function review()
    {
        return $this->hasMany('App\Models\Review', 'user_id', 'id');
    }
    
}
