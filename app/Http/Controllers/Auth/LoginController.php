<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginUserRequest;
use App\Services\UserService;
use Auth;
use Illuminate\Http\RedirectResponse;

class LoginController
{
    /**
     * @var UserService
     */
    private UserService $userService;

    /**
     * LoginController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login()
    {
        return view('auth.sign-in');
    }

    public function authenticate(LoginUserRequest $request): RedirectResponse
    {
        return $this->userService->login($request);
    }

    public function logout()
    {
        return redirect('/')->with(Auth::logout());
    }
}
