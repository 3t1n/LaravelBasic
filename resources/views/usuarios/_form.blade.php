@section("styles")

@endsection

<input hidden title="id" name="id" value="{{@$usuario->id}}">




<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">
        <label>Nome</label>
        <input type="text" placeholder="Nome completo" name="nome" value="{{@$usuario->name}}" class="form-control">
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">
        <label>Tipo de usuário</label>
        <select name="genero" class="form-control">
            <option selected disabled>Selecione o cargo</option>
            <option value="1" {{@$usuario->role_id == 1 ? "selected" : "" }}>Root</option>
            <option value="2" {{@$usuario->role_id == 2  ? "selected" : "" }}>Administrador</option>
            <option value="3" {{@$usuario->role_id == 3     ? "selected" : "" }}>Usuário</option>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">
        <label>E-mail</label>
        <input type="email" placeholder="Endereço de E-mail" name="email" value="{{@$usuario->email}}"
               class="form-control">
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">
        <label>Senha</label>
        <input type="password" placeholder="Senha (mínimo  6 digitos)" name="senha" class="form-control">
    </div>
</div>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-8">
        <label>Confirmação de Senha</label>
        <input type="password" placeholder="Repita a senha" name="senha_confirmar" class="form-control">
    </div>
</div>

@section('scripts')

    <script src="{!! asset('componentes/jquery-mask/jquery-mask.js') !!}"></script>
    <script src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\Usuario\UsuarioRequest', '.form-validar') !!}

@endsection
