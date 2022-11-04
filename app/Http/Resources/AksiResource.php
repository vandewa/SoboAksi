<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AksiResource extends JsonResource
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
            "judul" => $this->judul??'',
            "kategori" => $this->kategorinya->nama_kategori??'',
            "deskripsi" => $this->deskripsi??'',
            "setuju" => $this->setuju??'',
            "publish_st" => $this->publikasi->code_nm??'',
            "publish_at" => $this->publish_at??'',
            "creator_id" => $this->user->name??'',
        ];
    }
}
