<?php

namespace App\Http\Requests\Visitante;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'email.required'=>'Campo E-mail é obrigáorio.',
            'email.email'=>' E-mail invalido.',
            'email.exists'=>' E-mail não cadastrado.'
        ];
    }

    public function rules()
    {
        return [
            'email'=>'required|email|exists:users,email'
        ];
    }
}
