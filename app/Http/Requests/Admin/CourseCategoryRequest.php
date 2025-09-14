<?php

namespace App\Http\Requests\Admin;

use App\Models\CourseCategory;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CourseCategoryRequest extends FormRequest
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
            'name'   => ['required', 'string', 'max:100', Rule::unique(app(CourseCategory::class)->getTable())->ignore($this->course_category)],
            'status' => ['required', 'string', 'max:50']
        ];
    }
}
