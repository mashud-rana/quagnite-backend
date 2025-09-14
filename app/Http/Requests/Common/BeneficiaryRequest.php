<?php

namespace App\Http\Requests\Common;

use Illuminate\Foundation\Http\FormRequest;

class BeneficiaryRequest extends FormRequest
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
            'beneficiary_name' => 'required',
            'type' => 'required',
            'card_number' => 'required_if:type,1',
            'card_holder_name' => 'required_if:type,1',
            'expire_month' => 'required_if:type,1',
            'expire_year' => 'required_if:type,1',
            'bank_name' => 'required_if:type,2',
            'bank_account_name' => 'required_if:type,2',
            'bank_account_number' => 'required_if:type,2',
            'bank_routing_number' => 'required_if:type,2',
            'paypal_email' => 'required_if:type,3',
        ];
    }

    public function messages()
    {
        return [
            'card_number.required_if' => 'Card Number is required',
            'card_holder_name.required_if' => 'Card Holder Name is required',
            'expire_month.required_if' => 'Expire Month is required',
            'expire_year.required_if' => 'Expire Year is required',
            'bank_name.required_if' => 'Bank Name is required',
            'bank_account_name.required_if' => 'Bank Account Name is required',
            'bank_account_number.required_if' => 'Bank Account Number is required',
            'bank_routing_number.required_if' => 'Bank Routing Number is required',
            'paypal_email.required_if' => 'Paypal Email is required',
        ];
    }
}
