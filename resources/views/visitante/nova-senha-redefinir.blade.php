@extends('layouts.app')

@section('title', 'Nova Senha')


@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div style="text-align: center">
            <img src="{{asset("img/rede-animal-completo.png")}}" style="width: 250px; height: 200px;">
        </div>
        <p> Entre com seu email para enviarmos o link para você redefinir a sua senha </p> <br>
        <form class="m-t form-validar" role="form" method="post" action="{{route("esqueceu-senha.update", $codigo)}}">
            {{csrf_field()}}
            {{method_field("PUT")}}
            <div class="form-group">
                <input class="form-control" autocomplete="off" value="{{$usuario->email}}" disabled>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha de no minimo de 6 Digitos" name="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirmar Senha" name="passwordRepetido">
            </div>
            <button class="btn btn-success btn-submit full-width m-b block btn-submit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Carregando">
                Mudar senha
            </button>
        </form>
        <p>
            Fazer login ?
            <a style="text-decoration: underline;" href="{{route('login.index')}}"> Clique aqui </a>
        </p>
        <p class="m-t">
            <small>SMIT © {{date('Y')}}</small>
        </p>
    </div>
@endsection

@section("scripts")

    <script src="{{ asset('componentes/sweet-alert/sweet-alert.js') }}"></script>

    <script>

        @if(session()->has('enviado'))
            swal('Sucesso', 'Um link foi enviado no seu e-mail, para redefinir sua senha!', 'success');
        @endif

    </script>


    <script src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Visitante\NovaSenhaRequest') !!}

@endsection

