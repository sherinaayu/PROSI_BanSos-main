<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'The username field is required.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters.',
        ];
    }
}