@extends('layouts.app')

@section('title', 'Usuário')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight ">
        <form action="{{route('usuarios.store')}}" class="form-validar form-horizontal" method="post" enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="text-center">Adicionar Usuário</h4>
                </div>
                <div class="panel-body">
                    {{csrf_field()}}
                    @include('usuarios._form')
                </div>
                <div class="panel-footer text-center">
                    <a class="btn btn-danger btn-voltar" href="{{route('usuarios.index')}}">Cancelar</a>
                    <button class="btn btn-success btn-submit" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Carregando">
                        Adicionar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
