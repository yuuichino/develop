<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'menu.title' => 'required|string|max:100',
            'menu.body' => 'required|string|max:4000',
        ];
    }
}