<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCondRequest extends FormRequest
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
            'name' => 'required|string|max:30|min:3',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ad daxil etmədiniz.',
            'name.min' => 'Ad minimum 3 simvol təşkil etməlidir.',
            'email.required' => 'Email daxil etmədiniz.',
            'email.email' => 'Email adres daxil etməlisiniz.',
            'email.unique' => 'Bu E-mail artıq istifadə olunur',
            'password.required' => 'Parol daxil etmədiniz.',
            'password.min' => 'Parol minimum 8 simvol olmalıdır.',
            'password.confirmed' => 'Parol doğrulaması yalnışdır.',
        ];
    }
}
