<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>'required|string|max:20',
            'description'=>'nullable|string|max:255',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.max'=>'Solo se permite 20 caracteres.',
            'description.string'=>'El valor no es correcto.',
            'description.max'=>'Solo se permite 255 caracteres.',
        ];
    }
}
