<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\StoreUserRequest;
use App\Providers\RouteServiceProvider;
use App\Services\UserService;

class RegisterController
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * AuthController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function register()
    {
        return view('auth.sign-up');
    }

    public function store(StoreUserRequest $request)
    {
        $this->userService->register($request);

        return redirect(RouteServiceProvider::HOME);

//        return redirect()->back()->with('success', 'Thanks! Your account has been successfully created. Please check your email for verification.');
    }
}
