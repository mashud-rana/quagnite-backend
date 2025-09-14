<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AwsAccountRequest extends FormRequest
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
            'acc_name' => ['required'],
            'acc_id' => ['required'],
            'acc_profile' => ['required'],
            'user_group' => ['required'],
            'status' => ['required'],
        ];
    }
}
