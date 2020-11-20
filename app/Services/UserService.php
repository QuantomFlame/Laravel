<?php

namespace App\Services;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;

class UserService
{
    /**
     * @param LoginUserRequest $request
     * @return RedirectResponse
     */
    public function login(LoginUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if (!auth()->attempt($validated))
        {
            return redirect('/sign-in')->with('danger', 'Address email or/and password are incorrect.');
        }

        return redirect('/home');
    }

    public function register(StoreUserRequest $request): void
    {
        $validated = $request->validated();

        $user = User::create([
            'username' => $validated['username'],
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'last_name' => $validated['last_name'],
            'avatar' => $validated['avatar'] ?? 'default.png',
            'email' => $validated['email'],
            'password' => $validated['password'],
            'gender' => $validated['gender'],
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'birthday' => $validated['birthday'],
            'country' => $validated['country'],
            'state' => $validated['state'],
            'city' => $validated['city'],
            'token' => Str::random(255),
        ]);

        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');

            $filename = $user->id . '.' . time() . $avatar->getClientOriginalName();

            $user->avatar = $avatar->storeAs('avatars', $filename, 'public');

            $user->save();
        }

        event(new Registered($user));
    }
}
