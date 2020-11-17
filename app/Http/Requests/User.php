<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class User extends FormRequest
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
            //
            'name' => 'required|max:255|string',
            'username' => "required|unique:users,username,{auth()->user()->id}|max:255|alpha_dash",
            'password' => 'string|min:8|max:255|confirmed|nullable',
            'email'=>"string|email|required|max:255|unique:users,email,{auth()->user()->id}"
        ];
    }
}
