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
            'email' => 'required|email|unique:users,email',
            'login' => 'required|string|min:4|unique:users,login',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'password' => 'required|confirmed|string',
            'address' => 'nullable|string',
            'number' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле является обязательным!',
            'email.unique' => 'Данный Email адрес уже используется!',
            'email' => 'Поле почты заполнено неверно!',
            'login.required' => 'Поле является обязательным!',
            'login.unique' => 'Данный логин уже используется!',
            'login.min' => 'Данный логин содержит менее 4 символов!',
            'login' => 'Поле логина заполнено неверно!',
            'password.required' => 'Поле является обязательным!',
            'password.confirmed' => 'Пароли не совпадают!',
        ];
    }
}
