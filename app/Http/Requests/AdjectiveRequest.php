<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdjectiveRequest extends FormRequest
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
            'word' => ['required', ' unique:adjectives', 'string', 'max:255'],
            'en' => ['required', 'string'],
            'et' => ['required', 'string'],
            'difficulty' => ['required', 'string'],
            'language' => ['nullable', 'string'],
        ];
    }
}
