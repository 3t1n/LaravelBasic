<?php

namespace App\Http\Controllers\Visitante;

use App\Http\Requests\Visitante\LoginRequest;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginCtrl extends Controller
{
    public function index()
    {
        return view("visitante.login");
    }

    public function store(LoginRequest $request)
    {
        $dados = $request->only(['email', 'password']);

        if (Auth::attempt($dados))
            return redirect()->route('usuarios.index');
        else
            return redirect()->route('login.index')->with(['email/senha erro' => true, 'email' => $dados['email']]);
    }

}
