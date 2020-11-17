<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class storeUpdate extends FormRequest
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
    public function rules(request $request)
    {
        return [
            //
                'name' => 'required|max:255|string',
                'avatar' => 'required',
                'password' => 'string|min:8|max:255|confirmed|nullable',
                'email' => [
                    'email',
                    Rule::unique('users')->ignore(auth()->user()->id),
                ],
        ];
    }
}
