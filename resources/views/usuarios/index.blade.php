@extends('layouts.app')

@section('title', 'Usuários')

@section('styles')

    <link rel="stylesheet" href="{!! asset('componentes/data-table/data-table.css') !!}" />
    <link rel="stylesheet" href="{!! asset('componentes/data-table/responsive.css') !!}" />
    <link rel="stylesheet" href="{!! asset('componentes/data-table/data-table-buttons.css') !!}" />
    <link rel="stylesheet" href="{!! asset('componentes/sweet-alert/sweet-alert.css') !!}" />

@endsection

@section('content')
    <div class="wrapper wrapper-content animated fadeInRigth">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="text-center">Usários do Sistema</h4>
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Tipo</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($count = 1)
                    @foreach($usuarios as $usuario)
                        <td>{{$count++}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->cargo->name}}</td>
                        <td>
                            <a href="{{route('usuarios.edit', $usuario->id)}}">
                                <i class="fa fa-edit" style="color: #5cb85c"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route('usuarios.destroy', $usuario->id)}}" id="deletar" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a>
                                    <i class="fa fa-trash" style="color: #d9534f" onclick="deletar(this)"></i>
                                </a>
                            </form>
                        </td>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script src="{!! asset('componentes/data-table/data-table.js') !!}"></script>
    <script src="{!! asset('componentes/data-table/responsive.js') !!}"></script>
    <script src="{!! asset('componentes/data-table/data-table-buttons.js') !!}"></script>
    <script src="{!! asset('componentes/sweet-alert/sweet-alert.js') !!}"></script>
@endsection


