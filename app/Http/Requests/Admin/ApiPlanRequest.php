<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ApiPlanRequest extends FormRequest
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
        $rules = [
            'title'            => ['required', 'string', 'max:255'],
            'type'            => ['required', 'string'],
            'call_limit'     => ['required', 'integer'],
            'price'        => ['required', 'numeric'],
            // 'per_year'        => ['required', 'numeric'],
            // 'is_discount'      => ['required'],
            // 'discount_type'    => ['nullable'],
            // 'discount'         => ['nullable', 'integer'],
            // 'desc'             => ['required'],
            'status'           => ['required', 'string', 'max:20']
        ];

        return $rules;
    }
}
