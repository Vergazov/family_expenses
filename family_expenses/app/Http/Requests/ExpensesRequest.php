<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpensesRequest extends FormRequest
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
            'expenditure' => ['required', 'string'],
            'sum' => ['required', 'int'],
            'note' => []
        ];
    }

    public function messages()
    {
        return[
            'expenditure.required' => 'Поле статья расходов должно быть заполнено',
            'sum.required' => 'Поле сумма должно быть заполнено'
        ];
    }
}
