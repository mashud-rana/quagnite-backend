<?php

namespace App\Http\Requests\Admin;

use App\Models\Tag;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(Tag::class)->getTable())->ignore($this->tag)],
            'status' => ['required', 'string', 'max:50'],
            'tag_category_id' => ['required'],
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tag_category_id.required' => 'Tag Category is required!', 
        ];
    }
}
