<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserformRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ];
    }

    // Las Traducciones en esta versión de laravel se encuentran en una carpeta creada en resource lang/es

}
