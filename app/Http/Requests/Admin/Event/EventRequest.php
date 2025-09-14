<?php

namespace App\Http\Requests\Admin\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'event_start' => 'required|date|after_or_equal:today',
            'event_end' => 'required|date|after:event_start',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'event_type' => 'required|in:0,1',
            'status' => 'required',
            'speakers' => 'nullable|array',
            'speakers.*' => 'exists:speakers,id',
        ];
    }
}
