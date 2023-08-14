<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'work.title' => 'required|string|max:100',
            'work.count' => 'required|string|max:4000',
        ];
    }
}