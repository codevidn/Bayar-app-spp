@extends('layouts.app')

@section('content')
<div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">
                <img src="{{ asset('/images/Logo_smkn_4_bandung.png') }}" width="100px" alt="" srcset="">
            </a></br>
            <small>Portal {{ __('Reset Password') }} Aplikasi SPP</small>
        </div>
        <div class="card">
            <div class="body">
                 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="msg">{{ __('Reset Password') }}</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class=" m-t-15 m-b-15">
                    <button class="btn btn-block bg-pink waves-effect" type="submit">{{ __('Send Password Reset Link') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection