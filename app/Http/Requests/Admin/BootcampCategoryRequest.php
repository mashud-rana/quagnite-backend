<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use App\Models\BootcampCategory;
use Illuminate\Foundation\Http\FormRequest;

class BootcampCategoryRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(BootcampCategory::class)->getTable())->ignore($this->bootcamp_category)],
            'status' => ['required', 'string', 'max:50']
        ];
    }
}
