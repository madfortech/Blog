<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    // public function authorize()
    // {
    //     return Gate::allows('post_create');
    // }

    public function rules()
    {
        return [
            'description' => [
                'required',
            ],
            'avatar' => [
                'required',
            ],
        ];
    }
}
