<?php

namespace App\Http\Resources\Ebook;

use Illuminate\Http\Resources\Json\JsonResource;

class EbookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author_name,
            'description' => $this->details,
            "image" => $this->image ? getStoreFile($this->image, $this->storage_type) : null,
            'price' => $this->price,
            'ebook_type' => $this->ebook_type,
            'average_rating' => $this->average_rating,
            'file' => $this->ebook_file ? getStoreFile($this->ebook_file, $this->storage_type) : null,
        ];
    }
}
