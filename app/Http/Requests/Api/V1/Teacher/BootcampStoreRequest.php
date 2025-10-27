<?php

namespace App\Http\Requests\Api\V1\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class BootcampStoreRequest extends FormRequest
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
            'start_date'       => ['required', 'date'],
            'end_date'       => ['required', 'string'],
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
