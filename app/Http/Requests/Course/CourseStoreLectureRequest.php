<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreLectureRequest extends FormRequest
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
            'course_id' => 'required',
            'course_lesson_id' => 'required',
            'file' => 'required|string',
            'video_mintues' => 'required_if:lecture_type,' . LECTURE_FORMAT_VIDEO . '|integer',
            'video_seconds' => 'required_if:lecture_type,' . LECTURE_FORMAT_VIDEO . '|integer',
            'title' => 'required',
            'lecture_type' => 'required',
            'lecture_format' => 'required',
        ];
    }
}
