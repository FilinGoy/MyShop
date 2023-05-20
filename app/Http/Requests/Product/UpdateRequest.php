<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'category' => 'required|integer',
            'brand' => 'nullable|integer',
            'manufacturer' => 'required|integer',
            'expiration' => 'nullable|integer',
            'expiration_type' => 'nullable|integer',
            'article' => 'nullable|string|unique:products,article'.$this->product->id,
            'packaging' => 'nullable|string',
            'ingredients' => 'required|string',
            'weight' => 'nullable|integer',
            'weight_type' => 'nullable|integer',
            'calorie' => 'nullable|integer',
            'count' => 'required|integer',
            'price' => 'required|numeric|regex:/^\d+(\.\d{1,2})?$/',
            'description' => 'nullable|string',
            'published' => 'nullable',
            'preview_image' => 'required',
            'tags' => 'nullable|array',
            'images' => 'nullable|array'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле является обязательным!',
            'category.required' => 'Поле является обязательным!',
            'manufacturer.required' => 'Поле является обязательным!',
            'article.unique' => 'Данный артикул уже используется!',
            'ingredients.required' => 'Поле является обязательным!',
            'count.required' => 'Поле является обязательным!',
            'price.required' => 'Поле является обязательным!',
            'price.regex' => 'Поле заполнено некорректно!',
            'published.required' => 'Поле является обязательным!'
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'published' => $this->toBoolean($this->published),
        ]);
    }

    private function toBoolean($booleable)
    {
        return filter_var($booleable, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }
}
