<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
        $rules =  [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name'  => ['required', 'string', 'max:50'],
            'email'      => ['required', 'string', Rule::unique('users')->ignore($this->teacher)],
            'phone'      => ['required', 'string', 'max:20'],
            'gender'     => ['required', 'string', 'max:50'],
            'status'     => ['required', 'string', 'max:10'],
            'teacher_category_id'     => ['required'],
            'password'   => [
                'required', 'string', 'confirmed', Password::min(8)
                // ->mixedCase()
                // ->letters()
                // ->numbers()
                // ->symbols()
            ],
            'password_confirmation' => ['required', Password::min(8)],
        ];

        if ($this->teacher) {
            $rules['password'] =  [
                'nullable', 'string', 'confirmed', Password::min(8)
                // ->mixedCase()
                // ->letters()
                // ->numbers()
                // ->symbols()
            ];
            $rules['password_confirmation'] = ['nullable', Password::min(8)];
        }
        return $rules;
    }
}
