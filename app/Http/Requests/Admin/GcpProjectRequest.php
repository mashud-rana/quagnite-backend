<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class GcpProjectRequest extends FormRequest
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
            'project_name' => ['required'],
            'project_no' => ['required'],
            'project_id' => ['required'],
            'project_url' => ['required'],
            'user_role' => ['required'],
            'status' => ['required'],
        ];
    }
}
