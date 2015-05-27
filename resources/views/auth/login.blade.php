@extends('app')

@section('content')
<form class="form-signin" role="form" method="POST" action="{{ url('/auth/login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h2 class="form-signin-heading">A3BPO</h2>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Errores en el formulario!</strong>.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="login-wrap">
        <div class="user-login-info">
            <input type="email" class="form-control" name="email" placeholder="Email">        
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <label class="checkbox">
            <input type="checkbox" name="remember"> Recordarme                
            <span class="pull-right">
                <a data-toggle="modal" href="#myModal"> Olvidate tú contraseña?</a>
            </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Ingresar</button>

       <!--- <div class="registration">              
            @if (Auth::guest())   
            No tienes cuenta?
            <a href="{{ url('/auth/register') }}">Regitrate</a>
            @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
                </ul>
            </li>
            @endif
        </div>-->

    </div>
</form>   
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
            </div>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Correo</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Restaurar password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- modal -->
@endsection
