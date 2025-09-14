<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'title'          => ['required', 'string'],
            'subtitle'       => ['required', 'string'],
            'description'    => ['required'],
            'course_category_id' => ['required'],
            'course_language_id' => ['required'],
            'tag_id' => ['nullable', 'array'],
            'difficulty_level_id' => ['required'],
            'learner_accessibility' => ['required'],
            'access_period' => ['required', 'integer'],
            'price' => ['required_if:learner_accessibility,paid'],
            'old_price' => ['required_if:learner_accessibility,paid'],
            'image' => ['required', 'image', 'max:2048'],
            'video' => ['nullable', 'string'],
            'video_link' => ['nullable', 'string'],
        ];
    }
}
