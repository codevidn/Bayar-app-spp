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

<div class="container-fluid">
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
                    <h2>
                    PENEMPATAN STRUK IURAN BULANAN
                    </h2>
                </div>
                <div class="body">
                    <table class="table table-bordered table-striped table-hover dataTable">
                    @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    @endif
                    @foreach($row['transaksi'] as $data)
                        <tr>
                            <td>{{ $data['bulan_dibayar'] }}</td>
                            <td style="width: 100px;">
                            @if( $data['status'] === '1')
                            <form action="{{ route('transaksi.batalkan',$data['id'] )}}" id="js{{ $data['id'] }}" method="post">
                                @csrf
                                <button class="btn btn-success waves-effect" type="submit" onclick="return confirm('Apakah anda ingin membatalkan Pelunasan SPP !!!')" data-type="cancel">Lunas</button>
                                </form>
                            @else
                                <form action="{{ route('transaksi.update',$data['id'] )}}" id="js{{ $data['id'] }}" method="post">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-primary waves-effect" type="submit" onclick="return confirm('Apakah anda ingin melakukan transaksi !!!')" data-type="cancel">Bayar</button>
                                </form>
                            @endif
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
