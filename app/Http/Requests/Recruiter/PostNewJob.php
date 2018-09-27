<?php

namespace App\Http\Requests\Recruiter;

use Illuminate\Foundation\Http\FormRequest;

class PostNewJob extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'agree' => 'required',
            'title' => 'required|string|unique_with:jobs,recruiter_id',
            'position' => 'required|string',
            'location' => 'required|string',
            'min_salary' => 'required|numeric',
            'max_salary' => 'required|numeric',
            'description' => 'required|between:20,5000',
            'skills' => 'required|string',
            'website' => 'nullable|url',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'title.unique_with' => 'You have already created a job opening with this name.',
            'agree.required' => 'You must agree to the terms and policies.',
        ];
    }
}
