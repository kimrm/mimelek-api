<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NounRequest extends FormRequest
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
            'word' => ['required', 'unique:nouns', 'string', 'max:255'],
            'gender' => ['required', 'string'],
            'difficulty' => ['required', 'string'],
            'language' => ['nullable', 'string'],
        ];
    }
}
