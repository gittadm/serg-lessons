<?php

namespace App\Http\Requests\Question;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:40',
            'description' => ['required', 'min:5'],
            'phone' => 'string',
            'is_quick' => 'integer',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Слишком короткое имя',
        ];
    }
}
