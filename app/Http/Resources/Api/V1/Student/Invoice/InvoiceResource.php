<?php

namespace App\Http\Resources\Api\V1\Student\Invoice;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\StudentResource;
use App\Http\Resources\Api\V1\Student\CategoryResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
use App\Http\Resources\Api\V1\Student\Ebook\EnrolledEbookResource;
use App\Http\Resources\Api\V1\Student\Invoice\InvoiceItemResource;

class InvoiceResource extends JsonResource
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
            'invoice_id' => $this->invoice_id,
            'due_date' => $this->due_date,
            'tax_amount' => $this->tax_amount,
            'discount_amount' => $this->discount_amount,
            'total' => $this->total,
            'payment_type' => $this->payment_type,
            'notes' => $this->notes,
            'status' => $this->status,

        ];

        if ($this->relationLoaded('items')) {
            $items = $this->whenLoaded('items');
            $resourceData['items'] = InvoiceItemResource::collection($items);
        }

        return $resourceData;

    }
}
