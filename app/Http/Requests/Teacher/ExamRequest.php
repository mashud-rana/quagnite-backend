<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class ExamRequest extends FormRequest
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
            'name'             => ['required', 'string'],
            'exam_type'        => ['required'],
            'title'            => ['required'],
            'opt_a'            => ['nullable'],
            'opt_b'            => ['nullable'],
            'opt_c'            => ['nullable'],
            'opt_d'            => ['nullable'],
            'answer'           => ['required'],
            'status'           => ['nullable', 'string', 'max:20'],
            'course_id'           => ['nullable'],
            'module_id'           => ['nullable'],
            'duration'           => ['nullable'],
            'exam_for'           => ['nullable'],
        ];

        if ($this->exam) {
            $rules['qus_id'] = ['required'];
        }

        return $rules;
    }
}
