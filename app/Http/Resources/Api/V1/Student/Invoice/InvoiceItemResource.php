<?php

namespace App\Http\Resources\Api\V1\Student\Invoice;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\CategoryResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
use App\Http\Resources\Api\V1\Student\Ebook\EnrolledEbookResource;

class InvoiceItemResource extends JsonResource
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
            'sku' => $this->sku,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'discount' => $this->discount,
            'discount_type' => $this->discount_type,
            'sub_total' => $this->sub_total,
        ];

         if ($this->relationLoaded('itemable')) {
            $itemable = $this->whenLoaded('itemable');
            $resourceData['itemable'] = $itemable;
        }


        return $resourceData;

    }
}
