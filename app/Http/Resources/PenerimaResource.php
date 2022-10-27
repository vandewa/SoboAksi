<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PenerimaResource extends JsonResource
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
            "nama" => $this->nama??'',
            "alamat" => $this->alamat??'',
            "region_prop" => $this->provinsi->region_nm??'',
            "region_kab" => $this->kabupaten->region_nm??'',
            "region_kec" => $this->kecamatan->region_nm??'',
            "region_kel" => $this->kelurahan->region_nm??'',
            "telepon" => $this->telepon??'',
            "kode_identitas" => $this->identitas->code_nm??'',
            "no_identitas" => $this->no_identitas??'',
            "foto_ktp" => $this->preview_ktp??'',
            "foto_penerima" => $this->preview_penerima??'',
        ];
    }
}
