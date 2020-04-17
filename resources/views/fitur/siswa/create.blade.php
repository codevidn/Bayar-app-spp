@extends('layouts.main')

@section('content')

@section('js')

@endsection
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
                                <input type="number" class="form-control" name="nisn" placeholder="NISN" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" name="nis" placeholder="NIS" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="jk"  class="form-control" id="">
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" class="form-control" name="no_telp" placeholder="Nomor Telpon" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="id_kelas"  class="form-control" id="">
                                    <option value="">-- Please select --</option>
                                    @foreach($kelas as $kel)
                                    <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="email" class="form-control" name="email" placeholder="Alamat E-mail" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"> Simpan</button>
                        <a name="" id="" class="btn btn-outline-secondary" href="{{route('siswa.index')}}" role="button">Kembali</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
