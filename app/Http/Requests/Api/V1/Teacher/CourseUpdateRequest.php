<?php

namespace App\Http\Requests\Api\V1\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class CourseUpdateRequest extends FormRequest
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
            'course_id'      => ['required'],
            'courseType' => ['nullable', 'string'],
            'title'          => ['required', 'string'],
            'subtitle'       => ['required', 'string'],
            'course_category_id' => ['required'],
            'course_subcategory_id' => ['nullable'],
            'course_announcement_id' => ['nullable'],
            'access_period' => ['required', 'integer'],
            'course_language_id' => ['required'],
            'tag_id' => ['nullable', 'string'],
            'difficulty_level_id' => ['required'],
            'learner_accessibility' => ['required'],
            'price' => ['required_if:learner_accessibility,paid'],
            'old_price' => ['required_if:learner_accessibility,paid'],
            'image' => ['required', 'image', 'max:2048'],
            'video' => ['nullable', 'string'],
            'video_link' => ['nullable', 'string'],
        ];
    }
}
