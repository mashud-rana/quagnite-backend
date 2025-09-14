<?php

namespace App\Http\Requests\Admin;

use App\Models\BlogCategory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class BlogCategoryRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(BlogCategory::class)->getTable())->ignore($this->blog_category)],
            'status' => ['required', 'string', 'max:50']
        ];
    }
}
