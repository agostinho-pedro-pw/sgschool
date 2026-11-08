<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class UserRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|email',
            'password' => 'required|min:6',
        ];
    }
    public function messages(): array
    {
        return [
            'username.required' => 'Este campo é obrigatório',
            'username.email' => 'Este campo é do tipo e-mail',
            'password.required' => 'Este campo é obbrigatório',
        ];
    }
}
