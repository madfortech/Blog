<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    public function authorize()
    {
       true;
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'avatar' => [
                'required',
                'mimetypes:audio/mpeg,audio/ogg,audio/wav', // specify allowed audio file types
                'max:5000', // specify maximum file size in kilobytes
            ],
        ];
    }
}
