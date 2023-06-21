<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'password' => 'required',
            'email' => 'email|required',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Parol daxil etmədiniz',
            'email.required' => 'E-mail daxil etmədiniz',
            'email.email' => 'E-mail formatında daxil edin'
        ];
    }
}
