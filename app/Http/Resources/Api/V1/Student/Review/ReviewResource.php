<?php

namespace App\Http\Resources\Api\V1\Student\Review;


use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Api\V1\Student\User\UserResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Teacher\TeacherResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $resource_data = [
            'id' => $this->id,
            'rating' => $this->rating,
            'status' => $this->status == PENDING ? 'Pending' : 'Active',
            'comment' => $this->comment,
            'text' => $this->text,
            'created_at' => $this->created_at,
            'helpful_votes_count' => $this->helpful_votes_count,

        ];

        if ($this->relationLoaded('user') ) {
            $user = $this->whenLoaded('user');
            $resource_data['user'] = new UserResource($user);
        }
        if ($this->relationLoaded('my_vote') ) {
            $my_vote = $this->whenLoaded(relationship: 'my_vote');
            $resource_data['my_vote'] = $my_vote;
        }

        return $resource_data;

    }
}
