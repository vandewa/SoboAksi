<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AksiUpdateValidation extends FormRequest
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
            'photo' => 'mimes:jpeg,png,jpg|max:2000',
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'setuju' => 'required',
            'publish_st' => 'required',
        ];
    }
}