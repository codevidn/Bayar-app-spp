@extends('layouts.main')

@section('content')
@section('js')
<!-- proc_close -->
<script src="{{ asset('js/pages/examples/profile.js')}}"></script>
<script src="{{ asset('js/pages/ui/dialogs.js')}}"></script>
<!-- Bootstrap Notify Plugin Js -->
<script src="{{ asset('plugins/bootstrap-notify/bootstrap-notify.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js')}}"></script>
<!-- SweetAlert Plugin Js -->
<script src="{{ asset('plugins/sweetalert/sweetalert.min.js')}}"></script>
<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<script>
function showCancelMessage1() {
    swal({
        title: "Apakah kamu serius?",
        text: "Untuk melakukan transaksi ini !!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#4CAF50",
        confirmButtonText: "Yes, Bayar",
        cancelButtonText: "No, Batal",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            document.getElementById('1').submit();
            swal("Transaksi Berhasil!", "Anda telah berhasil melakukan transaksi", "success");
        } else {
            swal("Transaksi Dibatalkan", "Anda telah membatalkan transaksi :)", "error");
        }
    });
}
function showCancelMessage2() {
    swal({
        title: "Apakah kamu serius?",
        text: "Untuk melakukan transaksi ini !!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#4CAF50",
        confirmButtonText: "Yes, Bayar",
        cancelButtonText: "No, Batal",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            document.getElementById('1').submit();
            swal("Transaksi Berhasil!", "Anda telah berhasil melakukan transaksi", "success");
        } else {
            swal("Transaksi Dibatalkan", "Anda telah membatalkan transaksi :)", "error");
        }
    });
}
</script>
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
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="{{ asset('images/user.png')}}" style="width: 136px;" alt="Profile Image" />
                    </div>
                    @method('PUT')
                    <div class="content-area">
                        <h3>{{$siswa->nama}}</h3>
                        <p>{{ $siswa->nis }}</p>
                        <p>XII RPL 2</p>
                    </div>
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
                        <tr>
                            <td>aaaaaa</td>
                            <td style="width: 100px;">
                                <button class="btn btn-primary waves-effect" onclick="showCancelMessage1()" data-type="cancel">Bayar</button>
                                <form action="{{ route('transaksi.create')}}" id="1" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>aaaaaa</td>
                            <td style="width: 100px;">
                                <button class="btn btn-primary waves-effect" onclick="showCancelMessage2()" data-type="cancel">Bayar</button>
                                <form action="{{ route('transaksi.create')}}" id="1" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>aaaaaa</td>
                            <td style="width: 100px;">
                                <button class="btn btn-primary waves-effect" onclick="showCancelMessage1()" data-type="cancel">Bayar</button>
                                <form action="{{ route('transaksi.create')}}" id="1" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>aaaaaa</td>
                            <td style="width: 100px;">
                                <button class="btn btn-primary waves-effect" onclick="showCancelMessage2()" data-type="cancel">Bayar</button>
                                <form action="{{ route('transaksi.create')}}" id="1" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>aaaaaa</td>
                            <td style="width: 100px;">
                                <button class="btn btn-primary waves-effect" onclick="showCancelMessage1()" data-type="cancel">Bayar</button>
                                <form action="{{ route('transaksi.create')}}" id="1" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>aaaaaa</td>
                            <td style="width: 100px;">
                                <button class="btn btn-primary waves-effect" onclick="showCancelMessage2()" data-type="cancel">Bayar</button>
                                <form action="{{ route('transaksi.create')}}" id="1" method="post">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
