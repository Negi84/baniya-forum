<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeMembership extends FormRequest
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
            'honorific' => 'required',
            'first_name'=> 'required',
            'email'=> 'required|unique:memberships,email',
            'country'=> 'required',
            'city'=> 'required',
            'mobile'=> 'required|digits:10',
            'referral_source'=> 'required',
            'company'=> 'required',
            'designation'=> 'required',
        ];
    }

    public function messages()
{
    return [
        'email.unique' => 'The email address is already in use.',
        'mobile.digits' => 'The mobile number must be 10 digits.',
    ];
}
}

