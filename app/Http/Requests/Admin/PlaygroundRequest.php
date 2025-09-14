<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PlaygroundRequest extends FormRequest
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
            'title' => ['required', 'min:2', 'max:255'],
            'playground_category_id' => ['required'],
            'status' => ['nullable'],
            'image' => 'mimes:jpeg,png,jpg|file|max:1024',
            'overview' => ['nullable'],
            'instruction' => ['nullable'],
        ];
    }
}
