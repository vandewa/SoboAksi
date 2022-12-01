<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AksiCommentResource extends JsonResource
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
            "id" => $this->id??'',
            "aksi_id" => $this->aksi_id??'',
            "root_id" => $this->root_id??'',
            "comment" => $this->comment??'',
            "creator_id" => $this->user->name??'',
        ];
    }
}
