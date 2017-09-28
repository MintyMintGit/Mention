@extends('app')

@section('content')

        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    @include('errors')
                    <form id="loginForm registerContainer"  method="POST" action="{{ url('/postlogin') }}">
                        {!! csrf_field() !!}
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" type="text" name='username' placeholder="username"/>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input class="form-control" type="password" name='password' placeholder="password"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-def btn-block">Login</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ url('/register') }}">Forgot Password</a>
                        </div>
                    </form>
                </div>

                <div class="col-md-4">
                    <button type="button" class="btn btn-def btn-block">Google</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-def btn-block">Facebook</button>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-def btn-block">LinkedIn</button>
                </div>

            </div>
        </div>


@stop