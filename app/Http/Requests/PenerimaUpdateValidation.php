<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenerimaUpdateValidation extends FormRequest
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
            'foto_ktp' => 'mimes:jpeg,jpg,png|max:2048',
            'foto_penerima' => 'mimes:jpeg,jpg,png|max:2048',
        ];
    }
}
