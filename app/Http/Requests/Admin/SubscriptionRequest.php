<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
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
            'title'            => ['required', 'string', 'max:255', Rule::unique('subscriptions')->ignore($this->subscription)],
            'type'                  => ['required', 'string'],
            // 'course_limit'          => ['nullable', 'integer'],
            // 'unlimited_course'      => ['nullable', 'boolean'],
            // 'bootcamp_limit'        => ['nullable', 'integer'],
            // 'unlimited_bootcamp'    => ['nullable', 'boolean'],
            'ebook_limit'           => ['required_without:unlimited_ebook', 'nullable', 'integer'],
            'unlimited_ebook'       => ['nullable'],
            'exam_limit'            => ['required_without:unlimited_exam', 'nullable', 'integer'],
            'unlimited_exam'        => ['nullable'],
            'playground_limit'      => ['required_without:unlimited_playground', 'nullable', 'integer'],
            'unlimited_playground'  => ['nullable'],
            // 'coaching_limit'        => ['nullable', 'integer'],
            // 'unlimited_coaching'    => ['nullable', 'boolean'],
            'price'                 => ['required', 'numeric'],
            'old_price'             => ['nullable', 'numeric'],
            // 'is_discount'        => ['required'],
            // 'discount_type'      => ['nullable'],
            // 'discount'           => ['nullable', 'integer'],
            'footer_text'           => ['nullable', 'string'],
            'desc'                  => ['required'],
            'status'                => ['required', 'string', 'max:20']
        ];

        return $rules;
    }
}
