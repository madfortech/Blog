<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
   
    public function rules()
    {
        return [
            'title' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'audio' => [
                'required',
                'mimetypes:audio/mpeg,audio/ogg,audio/wav', // specify allowed audio file types
                'max:5000', // specify maximum file size in kilobytes
            ],
        ];
    }
}
