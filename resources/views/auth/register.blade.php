@extends('app')

@section('content')

    <div class="row">
        <div class="Absolute-Center is-Responsive"> </div>
        <div id="logo-container"></div>
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            @include('errors')
            <form id="loginForm registerContainer"  method="POST" action="/postregister">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="password">First Name:</label>
                    <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}">
                </div>

                <div class="form-group">
                    <label for="password">Last Name:</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}">
                </div>

                <div class="form-group">
                    <label for="password">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Confirm Password:</label>
                    <input type="password_confirmation" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-def btn-block">Register</button>
                </div>

            </form>
        </div>
    </div>
    <h1>Register</h1>

    @include('errors')
@stop