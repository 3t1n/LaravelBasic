<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Requests\Usuario\UsuarioRequest;
use App\Models\AppUsuario;
use App\Http\Controllers\Controller;
use App\User;

class UsuarioCtrl extends Controller
{
    public function index()
    {
        $usuarios = User::with('cargo')->get();

        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(UsuarioRequest $request)
    {
        $dados = $request->all();

        $dados['password'] = bcrypt($dados['password']);


        User::create($dados);

        return redirect()->route('usuarios.index');
    }


    public function edit($id)
    {
        $usuario =  User::find($id);

        return view('usuarios.edit', compact('usuario'));
    }

    public function update(UsuarioRequest $request, $id)
    {
        $dados = $request->all();

        $dados['password'] = bcrypt($dados['password']);

        User::find($id)->update($dados);

        return redirect()->route('usuarios.index');


    }

    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('usuarios.index');

    }
}
