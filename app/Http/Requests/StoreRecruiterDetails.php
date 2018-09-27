<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecruiterDetails extends FormRequest
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
            'organization_name' => 'required|string|unique:recruiters|max:255',
            'office_address_line_1' => 'required',
            'office_address_line_2' => 'nullable',
            'designation' => 'required|string',
            'organization_logo' => 'nullable|mimes:jpeg,png,svg',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'organization_name.required' => 'Please enter the name of your organization.',
            'organization_name.string' => 'Please enter a valid name.',
            'organization_name.unique' => 'The organization name already exists.',
            'organization_name.max' => 'The size cannot be more than 255 characters.',

            'office_address_line_1.required' => 'Please provide the organization\'s address',

            'designation.required' => 'Please enter your designation in the organization.',
            'designation.string' => 'Please enter a valid designation name.',

            'organization_logo.mimes' => 'Only JPEG, PNG and SVG files are allowed.',
        ];
    }
}
