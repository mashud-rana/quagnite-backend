<?php

namespace App\Http\Requests\Schedule;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            'title'            => ['required', 'string', 'max:255'],
            'started_at'       => ['required'],
            'ended_at'         => ['required'],
            'amount'           => ['required', 'numeric'],
            'bootcamp_id'      => ['nullable'],
        ];

        return $rules;
    }
}
