<?php

namespace App\Http\Requests\Common;

use Illuminate\Foundation\Http\FormRequest;

class WithdrawRequset extends FormRequest
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
            'amount' => 'required|lte:' . auth()->user()->balance . '|gte:' . config('settings.min_withdraw'),
            'beneficiary_id' => 'required',
        ];
    }
}
