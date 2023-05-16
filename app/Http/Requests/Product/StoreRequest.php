<?php

namespace App\Http\Requests\Product;

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
            'title' => 'required|string',
            'category_id' => 'required|integer',
            'brand_id' => 'nullable|integer',
            'manufacturer_id' => 'required|integer',
            'expiration_date' => 'nullable|integer',
            'expiration_type_id' => 'nullable|integer',
            'article' => 'nullable|integer|unique:products,article',
            'packaging_id' => 'nullable|string',
            'ingredients' => 'required|string',
            'weight' => 'nullable|integer',
            'weight_type_id' => 'nullable|integer',
            'calorie' => 'nullable|integer',
            'count' => 'required|integer',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable|string',
            'published' => 'required|boolean',
            'preview_image' => 'nullable|string'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле является обязательным!',
            'category_id.required' => 'Поле является обязательным!',
            'manufacturer_id.required' => 'Поле является обязательным!',
            'article.unique' => 'Данный артикул уже используется!',
            'ingredients.required' => 'Поле является обязательным!',
            'count.required' => 'Поле является обязательным!',
            'price.required' => 'Поле является обязательным!',
            'price.regex' => 'Поле заполнено некорректно!',
            'published.required' => 'Поле является обязательным!'
        ];
    }
}
