<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'role' => ['required', 'integer']
        ];
    }

    public function messages()
    {
        return [
          'name.required' => 'This field is required',
          'name.string' => 'This field must be of type string',
          'email.required' => 'This field is required',
          'email.string' => 'This field must be of type string',
          'email.email' => 'This field must contain your email adress',
          'email.max:255' => 'This field cannot contain more than 255 characters',
          'email.unique:users' => 'This email is already registred',
        ];
    }
}
