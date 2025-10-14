<?php

namespace App\Http\Resources\Api\V1;

use App\Http\Resources\Api\V1\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentInfoResource;

class BeneficiaryResource extends JsonResource
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
            'uuid' => $this->uuid,
            'image' => "",
            'beneficiary_name' => $this->beneficiary_name,
            'type' => match ($this->type) {
                1 => 'Card',
                2 => 'Bank',
                3 => 'PayPal',
                default => 'Unknown',
            },
            'card_number' => $this->card_number,
            'card_holder_name' => $this->card_holder_name,
            'expire_month' => $this->expire_month,
            'expire_year' => $this->expire_year,
            'bank_name' => $this->bank_name,
            'bank_account_number' => $this->bank_account_number,
            'bank_account_name' => $this->bank_account_name,
            'bank_routing_number' => $this->bank_routing_number,
            'paypal_email' => $this->paypal_email,
            'status' => $this->status == ACTIVE ? 'Active' : 'Inactive',

        ];
        if ($this->relationLoaded('user')) {
            $resourceData['user'] = new UserResource($this->user);
        }
        return $resourceData;

    }
}
