<?php

namespace App\Http\Requests\User;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|string|unique:users,email',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'password' => 'required|confirmed|string',
            'adress' => 'nullable|string',
            'number' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле является обязательным!',
            'email.unique' => 'Данный E-Mail уже используется!',
            'password.required' => 'Поле является обязательным!',
            'password.confirmed' => 'Пароли не совпадают!'
        ];
    }
}
