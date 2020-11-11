<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Keyqeen extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * 
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
            'body'=>'max:255'
        ];
    }
    public function messages()
    {
        return [
            //
            'body.max'=>'không được nhập quá 255 kí tự'
        ];  
    }
}
