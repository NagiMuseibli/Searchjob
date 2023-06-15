<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCompRequest extends FormRequest
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
            'company_name' => 'required|string|max:255',
            'about_company' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'company_cv_email' => 'required|string|email|max:255',
            'company_tel' => 'required|string|max:255',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'Ad daxil etmədiniz.',
            'about_company.required' => 'Şirkət haqqında məlumat daxil etmədiniz.',
            'email.required' => 'Email daxil etmədiniz.',
            'email.email' => 'Email adres daxil etməlisiniz.',
            'email.unique' => 'Bu Email artıq istifadə olunur',
            'company_cv_email.required' => 'Email daxil etmədiniz.',
            'company_cv_email.email' => 'Email adres daxil etməlisiniz.',
            'company_tel.required' => 'Telefon nömrəsi daxil etmədiniz.',
            'password.required' => 'Parol daxil etmədiniz.',
            'password.min' => 'Parol minimum 8 simvol olmalıdır.',
            'password.confirmed' => 'Parol doğrulaması yalnışdır.',
        ];
    }
}
