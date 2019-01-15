<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element text-center">
                    <a data-toggle="dropdown" class="dropdown-toggle" >
                        <span class="clear">
                            <span class="block m-t-xs">
                                <img src="{{ asset("img/logo.png")}}" style="width: 80%; height: auto;" ><br><br><!-- colocar .png e alterar tamanho -->
                                <strong class="font-bold">{{Auth::user()->nome}}</strong>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="logo-element">
                    <img src="{{asset("img/logo.png")}}" style="width: 85%; height: auto;" ><!-- colocar .png e alterar tamanho -->
                </div>
            </li>
            <li>
                <a>
                    <i class="fa fa-user-secret"></i>
                    <span class="nav-label">Administração</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('usuarios.index')}}">Usuários</a></li>
                    <li><a href="">Central de Ajuda</a></li>
                    <li><a href="">Termos de uso</a></li>
                </ul>
            </li>
            <li>
                <a onclick="document.getElementById('sair').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span class="nav-label">Sair</span>
                </a>
                <form action="{{('sair')}}" id="sair" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </li>
        </ul>
    </div>
</nav>
