<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AksiStoreValidation extends FormRequest
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
            'photo' => 'required',
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'setuju' => 'required',
            'publish_st' => 'required',
        ];
    }
}
