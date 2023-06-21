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
            'company_name' => 'required|string|min:5|max:30',
            'about_company' => 'required|string|min:10',
            'email' => 'required|string|email|max:255|unique:users',
            'company_cv_email' => 'required|string|email|max:50',
            'company_tel' => 'required|string|min:13|max:13',
            'password' => 'required|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'company_name.required' => 'Şirkət adı daxil etmədiniz.',
            'company_name.min' => 'Şirkət adı minimum 5 simvol olmalıdır.',
            'about_company.min' => 'Şirkət haqqında məlumat minimum 10 simvol olmalıdır.',
            'about_company.required' => 'Şirkət haqqında məlumat daxil etmədiniz.',
            'email.required' => 'E-mail daxil etmədiniz.',
            'email.email' => 'E-mail adres daxil etməlisiniz.',
            'email.unique' => 'Bu E-mail artıq istifadə olunur',
            'company_cv_email.required' => 'E-mail daxil etmədiniz.',
            'company_cv_email.email' => 'E-mail formatında daxil edin.',
            'company_tel.required' => 'Telefon nömrəsi daxil etmədiniz.',
            'company_tel.max' => 'Telefon nömrəsi bu formatda olmalıdır: +994123456789.',
            'company_tel.min' => 'Telefon nömrəsi bu formatda olmalıdır: +994123456789.',
            'password.required' => 'Parol daxil etmədiniz.',
            'password.min' => 'Parol minimum 8 simvol olmalıdır.',
            'password.confirmed' => 'Parol doğrulaması yalnışdır.',
        ];
    }
}
