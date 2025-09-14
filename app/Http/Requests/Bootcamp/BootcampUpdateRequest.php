<?php

namespace App\Http\Requests\Bootcamp;

use Illuminate\Foundation\Http\FormRequest;

class BootcampUpdateRequest extends FormRequest
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
            'bootcamp_id'      => ['required'],
            'title'          => ['required', 'string'],
            'subtitle'       => ['required', 'string'],
            'start_date'       => ['required', 'date'],
            'end_date'       => ['required', 'date'],
            'description'    => ['required'],
            'bootcamp_category_id' => ['required'],
            'bootcamp_language_id' => ['required'],
            'tag_id' => ['nullable', 'array'],
            'difficulty_level_id' => ['required'],
            'learner_accessibility' => ['required'],
            'access_period' => ['required', 'integer'],
            'price' => ['required_if:learner_accessibility,paid'],
            'old_price' => ['required_if:learner_accessibility,paid'],
            'image' => ['nullable', 'image', 'max:2048'],
            'video' => ['nullable', 'string'],
            'video_link' => ['nullable', 'string'],
        ];
    }
}
