<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'uid'=>$this->uid,
            'name'=>$this->full_name,
            'contact'=>$this->contact,
            // 'user'=>$this->when($this->relationLoaded('user'), new UserResource($this->user)),
        ];
    }
}
