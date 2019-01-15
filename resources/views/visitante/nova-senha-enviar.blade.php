@extends('layouts.app')

@section('title', 'Nova Senha')

@section("styles")

    <link href="{{ asset('componentes/sweet-alert/sweet-alert.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div style="text-align: center">
            <img src="{{asset("img/rede-animal-completo.png")}}" style="width: 250px; height: 200px;">
        </div>
        <p> Entre com seu email para enviarmos o link para você redefinir a sua senha </p> <br>
        <form class="m-t form-validar" role="form" method="post" action="{{route("esqueceu-senha.store")}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="email" autocomplete="off" class="form-control" name="email" placeholder="Endereço de email">
            </div>
            <button class="btn btn-primary btn-submit block full-width m-b" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Carregando">
                Mandar nova senha
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
    {!! JsValidator::formRequest('App\Http\Requests\Visitante\EmailRequest') !!}

@endsection

