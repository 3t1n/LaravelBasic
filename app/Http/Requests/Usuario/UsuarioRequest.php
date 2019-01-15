<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'email.required'=>'O campo E-mail é obrigatório.',
            'email.email'=>'E-mail inválido.',
            'telefone.required'=>'Campo telefone é obrigatório.',
            'telefone.telefone_valido'=>'Telefone inválido',
            'genero.required'=>'Campo gênero é obrigatório.',
            'senha.required'=>'O campo senha é obrigatório.',
            'senha.min'=>'O campo senha tem que ter no minimo 6 digitos.',
            'senha_confirmar.required'=>'O campo confirmar senha é obrigatório.',
            'senha_confirmar.same'=>'Senhas diferentes.',

        ];
    }

    public function rules()
    {
        return [

            'nome'=>'required',
            'telefone'=>'required|telefone_valido',
            'dt_nascimento'=>'required',
            'genero'=>'required',
            'email'=>'required|email|unique:app_usuarios,email,'.$this->get('id'),
            'senha'=>'required|min:6',
            'senha_confirmar'=>'required|same:senha',

        ];
    }
}
