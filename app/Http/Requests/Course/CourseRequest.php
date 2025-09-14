<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title'          => ['required', 'string'],
            'requirements'   => ['required'],
            'descriptions'    => ['required'],
            'image'          => ['required'],
            'course_category'=> ['required'],
            'level'          => ['required'],
            'outcomes'          => ['required'],
            'meta_keywords'     => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:1000'],
            'course_settings' => ['required'],
            'status'           => ['nullable', 'string', 'max:20']
        ];

        if ($this->course) {
            $rules['image'] = ['nullable'];
        }

        return $rules;
    }
}
