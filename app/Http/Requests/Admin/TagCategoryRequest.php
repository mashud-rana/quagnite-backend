<?php

namespace App\Http\Requests\Admin;

use App\Models\TagCategory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TagCategoryRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(TagCategory::class)->getTable())->ignore($this->tag_category)],
            'status' => ['required', 'string', 'max:50']
        ];
    }
}
