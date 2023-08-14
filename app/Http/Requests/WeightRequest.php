<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'weight.weight' => 'required|string|max:100',
            'weight.days' => 'required|string|max:4000',
        ];
    }
}