<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            "name" => $this->name??'',
            "email" => $this->email??'',
            "otp" => $this->otp??'',
            "nik" => $this->nik??'',
            "nomor_hp" => $this->nomor_hp??'',
            "alamat" => $this->alamat??'',
            "pekerjaan" => $this->pekerjaan??'',
            "tgl_lahir" => $this->tgl_lahir??'',
            "jenis_kelamin_st" => $this->jk->code_nm??'',
            "region_prop" => $this->provinsi->region_nm??'',
            "region_kab" => $this->kabupaten->region_nm??'',
            "region_kec" => $this->kecamatan->region_nm??'',
            "region_kel" => $this->kelurahan->region_nm??'',
        ];
    }
}
