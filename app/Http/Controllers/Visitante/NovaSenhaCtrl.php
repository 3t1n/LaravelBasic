<?php

namespace App\Http\Controllers\Visitante;

use App\Http\Requests\Visitante\EmailRequest;
use App\Http\Requests\Visitante\NovaSenhaRequest;
use App\Models\EsqueceuSenha;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class NovaSenhaCtrl extends Controller
{
    public function index()
    {
        return view('visitante.nova-senha-enviar');

    }

    public function store(EmailRequest $request)
    {
        $email = $request->get('email');

        $user = User::where("email", $email)->first();

        $codigo = str_shuffle('123471238890'.$email.'abc11312eSDFDrSccZXCfgmn*astuv61yz');

        $dados = ['id_user'=>$user->id, 'email'=>$email , 'codigo'=> $codigo];

        EsqueceuSenha::where('id_user', $user->id)->delete();
        EsqueceuSenha::create($dados);

        Mail::send('email.nova-senha', $dados,  function($message) use ($email){

            $message->subject('Recuperar senha');
            $message->from('appredeanimal@gmail.com');
            $message->to($email);

        });

        return redirect()->route('esqueceu-senha.index')->with('enviado', true);

    }

    public function show($codigo)
    {

        $esqueceu_senha = EsqueceuSenha::where('codigo', $codigo)->where('created_at', '>', Carbon::now()->subDays(30))->first();

        if($esqueceu_senha){

            $usuario = User::find($esqueceu_senha->id_user);

            return view('visitante.nova-senha-redefinir', compact('usuario', 'codigo'));

        }

        else
            return redirect()->route('login.index')->with('codigo', true);

    }

    public function update(NovaSenhaRequest $request, $codigo)
    {
        $dados = $request->all();

        $esqueceu_senha = EsqueceuSenha::where('codigo', $codigo)->first();

        $dados['password'] = bcrypt($dados['password']);

        User::find($esqueceu_senha->id_user)->update($dados);

        $esqueceu_senha->delete();

        return redirect()->route('login.index')->with('senha', true);

    }

}
