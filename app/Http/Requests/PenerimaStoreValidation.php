<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenerimaStoreValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'alamat' => 'required',
            'region_prop' => 'required',
            'region_kab' => 'required',
            'region_kec' => 'required',
            'region_kel' => 'required',
            'telepon' => 'required',
            'kode_identitas' => 'required',
            'no_identitas' => 'required',
            'foto_ktp' => 'required|mimes:jpeg,jpg,png|max:2048',
            'foto_penerima' => 'required|mimes:jpeg,jpg,png|max:2048',
        ];
    }
}
