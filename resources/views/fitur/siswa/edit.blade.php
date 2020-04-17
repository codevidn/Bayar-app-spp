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
                <form action="{{ route('siswa.update', $data['siswa']['id']) }}" method="post">
                @csrf
                @method('PUT')
                <h2 class="card-inside-title">Data Siswa</h2>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{ $data['siswa']['nama']}}" name="nama" placeholder="Nama Siswa" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{ $data['siswa']['nisn']}}" name="nisn" placeholder="NISN" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{ $data['siswa']['nis']}}" name="nis" placeholder="NIS" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="jk" class="form-control" id="">
                                    <option value="{{ $data['siswa']['jk']}}">{{ $data['siswa']['jk'] == 1 ? 'Laki-laki' : 'Perempuan' }}</option>
                                    <option value="1">Laki-laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{ $data['siswa']['no_telp']}}" name="no_telp" placeholder="Nomor Telpon" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="id_kelas" class="form-control" id="">
                                        <option value="{{ $data['siswa']['id_kelas']}}">{{ $data['siswa']['nama_kelas']}}</option>
                                    @foreach($data['kelas'] as $kel)
                                        <option value="{{ $kel['id'] }}" >
                                        {{ $kel['nama_kelas'] }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" class="form-control" value="{{ $data['siswa']['alamat']}}" name="alamat" placeholder="Alamat" />
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
