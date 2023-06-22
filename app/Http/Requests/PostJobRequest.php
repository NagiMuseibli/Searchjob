<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostJobRequest extends FormRequest
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
            'job_title' => 'required',
            'job_description' => 'required',
            'job_requirements' => 'required',
            'job_category' => 'required',
            'work_hour' => 'required',
            'salary' => 'required',
            'exp_year' => 'required',
            'city' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'job_title.required' => 'Başlıq boş buraxıla bilməz!',
            'job_description.required' => 'İşin təsviri boş buraxıla bilməz!',
            'job_requirements.required' => 'Tələblər boş buraxıla bilməz!',
            'job_category.required' => 'Kateqoriya boş buraxıla bilməz!',
            'work_hour.required' => 'İş qrafiki boş buraxıla bilməz!',
            'salary.required' => 'Əmək haqqı boş buraxıla bilməz!',
            'exp_year.required' => 'İş stajı boş buraxıla bilməz!',
            'city.required' => 'Şəhər boş buraxıla bilməz!',
        ];
    }
}
