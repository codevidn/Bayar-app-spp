@extends('layouts.main')

@section('content')
@section('js')
<!-- proc_close -->
<script src="{{ asset('js/pages/examples/profile.js')}}"></script>
<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js')}}"></script>
<!-- SweetAlert Plugin Js -->
<script src="{{ asset('plugins/sweetalert/sweetalert.min.js')}}"></script>
<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- pro -->
@endsection
@section('css')
<!-- Waves Effect Css -->
<link href="{{ asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
<!-- Animation Css -->
<link href="{{ asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
<!-- Sweetalert Css -->
<link href="{{ asset('plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />
@endsection

@section('js')
 
@endsection

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
        <div class="col-xs-12 col-sm-3">
            <div class="card profile-card">
                <div class="profile-header" style="background-color: rgb(6, 100, 100);">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                    @if($row['siswa']['jk'] === '1')
                        <img src="{{ asset('images/user-profile/male-user.jpg')}}" style="width: 136px;" alt="Profile Image" />
                        @else
                        <img src="{{ asset('images/user-profile/female-user.jpg')}}" style="width: 136px;" alt="Profile Image" />
                    @endif
                    </div>
                    @method('PUT')
                    <div class="content-area">
                        <h3>{{$row['siswa']['nama']}}</h3>
                        <p>{{$row['siswa']['nis']}}</p>
                        <p>{{$row['kelas']['0']['nama_kelas']}}</p>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="body">
                    @foreach($row['spp'] as $get)
                    <table>
                        <tr>
                            <td>Tahun &nbsp</td>
                            <td>: {{ $get['tahun'] }}</td>
                        </tr>
                        <tr>
                            <td>Iuran Bulanan &nbsp</td>
                            <td>: Rp. {{ $get['nominal'] }}.00;-</td>
                        </tr>
                    </table>
                @endforeach
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9">
            <div class="card">
                <div class="header">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#struk" aria-controls="home" role="tab" data-toggle="tab">Struk</a></li>
                        <li role="presentation"><a href="#change_password_settings" aria-controls="settings" role="tab" data-toggle="tab">Change Password</a></li>
                    </ul>
                </div>
                <div class="body">
                    <div>
                        <div class="tab-content">
                                
                            <div role="tabpanel" class="tab-pane fade in active" id="struk">
                                <h2>
                                    PENEMPATAN STRUK IURAN BULANAN
                                </h2>
                                <table class="table table-bordered table-striped table-hover dataTable">
                                    @foreach($row['transaksi'] as $data)
                                    <tr>
                                        <td>{{ $data['bulan_dibayar'] }}</td>
                                        <td style="width: 100px;">
                                        @if( $data['status'] === '1')
                                            @csrf
                                            <a class="btn btn-success waves-effect" type="submit" >Lunas</a>
                                        @else
                                            @csrf
                                            @method('PUT')
                                            <a class="btn btn-primary waves-effect" type="submit" >Bayar</a>
                                        @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>         
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="change_password_settings">
                                
                                <form class="form-horizontal" method="POST" action="{{ route('profile.store') }}">
                                {{ csrf_field() }}
                                    <div class="form-group {{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="current-password" class="col-sm-3 control-label">Old Password</label>
                                        <div class="col-sm-9">
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
                                        <label for="new-password" class="col-sm-3 control-label">New Password</label>
                                        <div class="col-sm-9">
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
                                        <label for="new-password-confirm" class="col-sm-3 control-label">New Password (Confirm)</label>
                                        <div class="col-sm-9">
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="new-password-confirm" name="new-password_confirmation" placeholder="New Password (Confirm)" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
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
