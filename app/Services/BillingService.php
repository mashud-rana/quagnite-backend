<?php

namespace App\Services;

use App\Models\BillingAddress;

class BillingService
{
    protected $model;

    public function __construct()
    {
        $this->model = new BillingAddress();
    }

    public function insertOrUpdate($request)
    {
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'address' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'email' => ['required'],
        ];

        $request->validate($rules);

        return BillingAddress::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'country' => $request->country,
                'city' => $request->city,
                'state' => $request->state,
                'email' => $request->email,
                'post_code' => $request->post_code,
            ]
        );
    }

    public function get()
    {
        return $this->model->where('user_id', auth()->id())->first();
    }
}
