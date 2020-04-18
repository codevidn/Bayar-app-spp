@extends('layouts.main')

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>Selamat Datang</h2>
            </div>
            <div class="body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Kamu berhasil masuk
                <p>
                    Hallo User Selamat datang di <b>Bayar</b> aplikasi pencatatan Spp sekolah,
                    untuk bantuan tatacara penggunaan aplikasi ini anda bisa mengklik tombol Help pada sidenavigation.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
