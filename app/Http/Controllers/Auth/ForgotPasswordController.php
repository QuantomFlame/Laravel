<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class ForgotPasswordController
{
    public function showLinkRequestForm()
    {
        return view('auth.email');
    }
}
