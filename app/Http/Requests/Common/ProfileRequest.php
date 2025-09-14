<?php

namespace App\Http\Requests\Common;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'first_name'    => 'required|string|max:50',
            'middle_name'   => 'nullable|string|max:50',
            'last_name'     => 'required|string|max:50',
            'phone'         => 'required|string|max:16',
            'email'         => "required|email|unique:users,email,{$this->id}",
            'gender'        => 'required',
            'date_of_birth' => 'required',
            'avatar'        => 'nullable',
            'address'       => 'nullable',
            'about_me'      => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required'    => 'First Name is Required!',
            'last_name.required'     => 'Last Name is Required!',
            'phone.required'         => 'Phone Number is Required!',
            'email.required'         => 'Email is Required!',
            'gender.required'        => 'Gender is Required!',
            'date_of_birth.required'        => 'DOB is Required!',
        ];
    }
}
