<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PlaygroundConfigurationRequest extends FormRequest
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
            'playground_id'  => ['required'],
            'ami' => ['nullable'],
            'instance_type' => ['nullable'],
            'security_group' => ['nullable'],
            'ssh_key_name' => ['nullable'],
        ];
    }
}
