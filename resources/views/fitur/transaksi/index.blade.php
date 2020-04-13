@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CARI SISWA
                        <small>system mencari berdasarkan nis</small>
                    </h2>
                </div>
                <div class="body">
                    <form action="{{ route('carisiswa') }}"  method="GET">  
                        <input type="text" name="cari" class="form-control" placeholder="START TYPING...">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($siswa as $data)
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        DATA SISWA
                        <small>system mencari berdasarkan nis</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label>NIS</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            : {{ $data->nis }}
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label>Nama</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            : {{$data->nama}}
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                            <label for="password_2">NISN</label>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            : {{$data->nisn}}
                        </div>
                    </div>
                <a href="{{ route('transaksi.show', $data->id) }}" class="btn btn-block btn-lg btn-primary waves-effect">Lakukan Trannsaksi</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
