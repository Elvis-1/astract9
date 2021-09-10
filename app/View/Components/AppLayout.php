<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        // return User::all();
        return view('layouts.app');
    }

    
}
