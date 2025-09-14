<?php

namespace App\Http\Requests\Admin;

use App\Models\ForumCategory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ForumCategoryRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(ForumCategory::class)->getTable())->ignore($this->forum_category)],
            'status' => ['required', 'string', 'max:50']
        ];
    }
}
