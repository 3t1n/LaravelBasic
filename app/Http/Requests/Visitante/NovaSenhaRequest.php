<?php

namespace App\Http\Requests\Visitante;

use Illuminate\Foundation\Http\FormRequest;

class NovaSenhaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function messages(){

        return [
            'password.required'=>'Campo senha é requerido',
            'password.min'=>'Senha tem que ter no minimo 6 caracteres',
            'passwordRepetido.required'=>'Campo confirmação de senha é requerido',
            'passwordRepetido.same'=>'Senhas devem ser iguais',
        ];
    }

    public function rules()
    {
        return [
            'password'=>'required|min:6',
            'passwordRepetido'=>'required|same:password'
        ];
    }
}
