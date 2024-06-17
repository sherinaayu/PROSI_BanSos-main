<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:250',
            'email' => 'required|email|unique:pengguna,Email',
            'username' => 'required|string|max:150|unique:pengguna,Username',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|integer|in:1,2,3,4,5',
        ];
    }
}
