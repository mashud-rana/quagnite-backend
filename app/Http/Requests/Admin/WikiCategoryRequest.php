<?php

namespace App\Http\Requests\Admin;

use App\Models\WikiCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WikiCategoryRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(WikiCategory::class)->getTable())->ignore($this->wiki_category)],
            'status' => ['required', 'string', 'max:50']
        ];
    }
}
