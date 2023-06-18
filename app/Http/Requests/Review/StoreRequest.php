<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user_id' => 'required|string',
            'country' => 'required|int'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле является обязательным!',
            'country.required' => 'Требуется выбрать страну!'
        ];
    }
}
