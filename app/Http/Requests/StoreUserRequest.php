<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:5|max:50',
            'first_name' => 'required|min:5|max:50',
            'middle_name' => 'required|min:5|max:50',
            'last_name' => 'required|min:5|max:50',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255|confirmed',
            'password_confirmation' => 'required|min:8|max:255',
            'gender' => 'required|in:1,2',
            'address' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'birthday' => 'required|date',
            'country' => 'nullable',
            'state' => 'nullable',
            'city' => 'nullable',
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'avatar.uploaded' => 'The avatar must not be more than 2MB.',
        ];
    }
}
