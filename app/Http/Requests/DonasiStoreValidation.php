<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonasiStoreValidation extends FormRequest
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
            'photo' => 'required|mimes:jpeg,png,jpg|max:2000',
            'judul' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'penerima_id' => 'required',
            'publish_at ' => 'required',
            'target_waktu ' => 'required',
            'target_donasi ' => 'required',
        ];
    }
}
