<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary "><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a onclick="document.getElementById('sair').submit();">
                    <i class="fa fa-sign-out"></i> Sair
                </a>
                <form action="{{route('sair')}}" id="sair" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                </form>
            </li>
        </ul>
    </nav>
</div>
