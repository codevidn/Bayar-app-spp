@extends('layouts.main')

@section('content')
<div class="container-fluid">
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
 @endif
 @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
 @endif
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h3>Edit Data Petugas</h3>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#data" aria-controls="data" role="tab" data-toggle="tab">Data Petugas</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                    </ul>
                </div>
                <div class="body">

                    <div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="data">
                                <form class="form-horizontal" method="POST" action="{{ route('petugas.update', $petugas->id) }}">
                                @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $petugas->name }}" required autocomplete="name" placeholder="Name" autofocus>

                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Username</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $petugas->username }}" placeholder="Username" required autocomplete="username">

                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $petugas->email }}" placeholder="E-mail" required autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary"> Simpan</button>
                                            <a name="" id="" class="btn btn-outline-secondary" href="{{route('petugas.index')}}" role="button">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                <form class="form-horizontal" method="POST" action="{{ route('profile.update',$petugas->id) }}">
                                @csrf
                                    @method('PUT')
                                    <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="current-password" class="col-sm-2 control-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Old Password" required>
                                            </div>
                                                @if ($errors->has('current-password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('current-password') }}</strong>
                                                </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-sm-2 control-label">New Password</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="new-password" name="new-password" placeholder="New Password" required>
                                            </div>
                                                @if ($errors->has('new-password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('new-password') }}</strong>
                                                </span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="new-password-confirm" class="col-sm-2 control-label">New Password (Confirm)</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="new-password-confirm" name="new-password_confirmation" placeholder="New Password (Confirm)" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">SUBMIT</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>

@endsection
