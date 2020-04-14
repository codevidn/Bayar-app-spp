@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
            <div class="header">
                <h2>
                       TAMBAH DATA SISWA
                </h2>
            </div>
            <div class="body">
                <form action="{{ route('siswa.store')}}" method="post">
                {{ csrf_field() }}
                {{ method_field('post') }}
                <h2 class="card-inside-title">Data Siswa</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nisn" placeholder="NISN" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="nis" placeholder="NIS" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telpon" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Simpan</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
