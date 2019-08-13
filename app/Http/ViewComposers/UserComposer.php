<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\User;

class UserComposer
{    
    protected $users = [];
    
    public function __construct(User $users)
    {
        $this->users = User::get();
    }

    public function compose(View $view)
    {
        $view->with('users', $this->users);
    }
}