<?php

namespace App\Http\Requests\Order;

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
            'first_name' => 'required',
            'last_name' => 'required',
            'address' => 'required',
            'description' => 'nullable',
            'status' => 'required|exists:statuses,id',
            'datetime_delivery' => 'required|date'
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Поле является обязательным!',
            'last_name.required' => 'Поле является обязательным!',
            'address.required' => 'Поле является обязательным!',
            'status.required' => 'Поле является обязательным!',
            'status.exists' => 'Поле содержит несуществующий статус!',
            'datetime_delivery.required' => 'Поле является обязательным!',
            'datetime_delivery.date' => 'Значение должно являтся датой!'
        ];
    }
}
