<?php

namespace App\Http\Requests\Country;

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
            'name' => 'required|string|unique:country,name',
            'abbreviation' => 'required|string|max:3|unique:country,abbreviation'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле является обязательным!',
            'name.unique' => 'Данное имя уже используется!',
            'abbreviation.required' => 'Поле является обязательным!',
            'abbreviation.unique' => 'Данная аббревиатура уже используется!',
            'abbreviation.max' => 'Данная аббревиатура содержит больше 3 символов!'
        ];
    }
}
