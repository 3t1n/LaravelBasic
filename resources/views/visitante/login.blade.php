@extends('layouts.app')

@section('title', 'login')

@section("styles")

    <link href="{{ asset('componentes/sweet-alert/sweet-alert.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div style="text-align: center">
            <img src="{{asset('img/logo.png')}}" style="width: 193px; height: 57px;">
        </div>
        <h3>Seja bem-vindo ao Laravel Basic!</h3>
        <p>Faça login para começar!</p>
        <form class="m-t form-validar" role="form" method="post" action="{{route("login.store")}}">
            {{csrf_field()}}
            <div class="form-group">
                <input name="email" type="email" class="form-control" value="{{session()->get('email')}}" placeholder="E-mail">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-submit btn-primary block full-width m-b" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Carregando">
                Entrar
            </button>
            <a href="{{route("esqueceu-senha.index")}}">
                <small>Esqueceu a senha?</small>
            </a>
        </form>
        <p class="m-t">
		Versão beta
	</p>
        <p class="m-t">
            <small>SMIT © {{date('Y')}}</small>
        </p>
    </div>
@endsection

@section("scripts")

    <script src="{{ asset('componentes/sweet-alert/sweet-alert.js') }}"></script>


    <script>

        @if(session()->has("email/senha erro"))
            swal("", "E-mail ou/e senha incorretos!", "error");
        @endif


    </script>

    <script src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Visitante\LoginRequest', '.form-validar') !!}

@endsection

