<?php

namespace App\Http\Requests\Api\V1\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class BootcampStoreUpdateRequest extends FormRequest
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
            'bootcamp_id'   => ['required', 'integer', 'exists:bootcamps,id'],
            'title'          => ['required', 'string'],
            'subtitle'       => ['required', 'string'],
            'start_date'       => ['required', 'date'],
            'end_date'       => ['required', 'date'],
            'description'    => ['required'],
            'bootcamp_category_id' => ['required'],
            'bootcamp_announcement_id' => ['nullable'],
            'course_language_id' => ['required'],
            'tag_id' => ['nullable', 'string'],
            'difficulty_level_id' => ['required'],
            'learner_accessibility' => ['required'],
            'price' => ['required_if:learner_accessibility,paid'],
            'old_price' => ['required_if:learner_accessibility,paid'],
            'image' => ['required', 'image', 'max:2048'],
            'file' => ['nullable', 'string'],
            'video_link' => ['nullable', 'string'],
            'access_period' => ['required', 'integer'],
            'video' => ['nullable', 'string'],
        ];
    }
}
