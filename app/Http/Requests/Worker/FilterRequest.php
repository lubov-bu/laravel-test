<?php

namespace App\Http\Requests\Worker;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'name' => 'nullable|string',
            'surname' => 'nullable|string',
            'email' => 'nullable|email',
            'from' => 'nullable|integer',
            'to' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
          'from.integer' => 'Это поле должно быть числом',
          'to.integer' => 'Это поле должно быть числом',
        ];
    }
}
