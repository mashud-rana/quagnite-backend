<?php

namespace App\Http\Requests\Api\V1\Student;

use Illuminate\Validation\Rule;
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
            'email'         => "required|email|unique:users,email,{$this->id}",
            "subscription_type" => "nullable",
            'phone'         => 'required|string|max:16',
            "country" => "nullable",
            "state" => "nullable",
            'address'       => 'nullable',
            'gender'        => ['required',Rule::in([GENDER_MALE,GENDER_FEMALE])],
            'about_me'      => 'nullable',
            'avatar'        => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is Required!',
            'email.email' => 'Please enter a valid email address!',
            'email.unique' => 'This email is already taken!',
            'phone.required' => 'Phone Number is Required!',
            'phone.string' => 'Phone Number must be a string!',
            'phone.max' => 'Phone Number must not exceed 16 characters!',
            'gender.required' => 'Gender is Required!',
        ];
    }
}
