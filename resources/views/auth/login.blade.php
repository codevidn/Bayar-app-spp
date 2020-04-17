@extends('layouts.app')

@section('content')
<div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">
                <img src="{{ asset('/images/Logo_smkn_4_bandung.png') }}" width="100px" alt="" srcset="">
            </a></br>
            <small>Portal Masuk Aplikasi SPP</small>
        </div>
        <div class="card">
            <div class="body">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="msg">{{ __('Login') }} to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username or Email" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">{{ __('Remember Me') }}</label>
                        </div>
                        <div class="col-xs-6">
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                    <div class=" m-t-15 m-b-15">
                    <button class="btn btn-block bg-pink waves-effect" type="submit">{{ __('Login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
