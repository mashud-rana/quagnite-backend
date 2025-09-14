<?php

namespace App\Http\Requests\Ebook;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEbookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request
     *
     * @return bool
     *
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
            'title' => ['required', 'min:2', 'max:255'],
            'author_name' => ['required'],
            'price' => ['required'],
            'status' => ['required'],
            'ebook_category_id' => ['required'],
            'ebook_type' => ['required'],
            'details' => ['required'],
            'image' => 'nullable|mimes:jpeg,png,jpg|file|max:1024',
            'ebook_file' => 'nullable|file|max:100000'
        ];
    }
}
