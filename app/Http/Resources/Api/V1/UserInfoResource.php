<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentInfoResource;

class UserInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $resourceData = [
            'id' => $this->id,
            'billing_name' => $this->billing_name,
            'billing_email' => $this->billing_email,
            'billing_address' => $this->billing_address,
            'billing_phone' => $this->billing_phone,
        ];

        return $resourceData;

    }
}
