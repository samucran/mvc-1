<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:120',
            'description' => 'required|max:250',
        ];
    }
}    
