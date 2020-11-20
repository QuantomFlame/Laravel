<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function home()
    {
        return view('pages.home-dashboard');
    }
}
