@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            <div class="header">
                <h2>
                       TAMBAH DATA KELAS
                </h2>
            </div>
            <div class="body">
                <form action="{{ route('kelas.store')}}" method="post">
                {{ csrf_field() }}
                {{ method_field('post') }}
                <h2 class="card-inside-title">Data Kelas</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas/tingkat" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="kompetensi_keahlian" placeholder="Kompetensi keahlian" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Simpan</button>
                        <a name="" id="" class="btn btn-outline-secondary" href="{{route('kelas.index')}}" role="button">Kembali</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
