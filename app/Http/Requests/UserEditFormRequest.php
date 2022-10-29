<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\Validation\Rule;

class UserEditFormRequest extends FormRequest
{
    protected $route;

    public function __construct(Route $route)
    {
        $this->route = $route;
    }
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
        // para poder usar el valor route le pasamos su valor primero en el constructor
        $user = $this->route->parameter('user');

        return [
            'name' => 'required',
            'email' => 'email',Rule::unique('users')->ignore($user),
            'password' => 'min:8'
        ];
    }
}
