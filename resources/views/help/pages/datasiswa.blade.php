@extends('layouts.help')

@section('content')
<div class="card">
    <card class="card-body">
        <h1>
            Kelola Data Sswa
        </h1>
</br>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/siswa/Screenshot_2020-04-16 Bayar(2).png')}}" alt="" >
                <b><i>Bambar 1 Tabel Siswa</i></b>
            </div>
            <h4>Fungsi pada gambar</h4>
            <ol start="1">
                <li>
                    Dua tombol di atas kanan
                    <ol type="a">
                        <li>tombol <a class="mb-2 text-white btn btn-success"><i class="fas fa-plus"></i></a> berfungsi untuk menambah data</li>
                        <li>tombol <a class="mb-2 text-white btn btn-primary"><i class="fas fa-sync"></i></a> berfungdi untuk memuat ulang tampilan </li>
                    </ol>
                </li>
                <li>
                    Tiga tombol Action
                    <ol type="a">
                        <li>tombol <a class="mb-2 text-white btn btn-info"><i class="fa fa-info-circle"></i></a> berfungsi untuk melihat detail siswa</li>
                        <li>tombol <a class="mb-2 text-white btn btn-warning"><i class="fa fa-pencil-alt"></i></a> berfungdi untuk mengedit data siswa </li>
                        <li>tombol <a class="mb-2 text-white btn btn-danger"><i class="fa fa-trash"></i></a> berfungdi untuk menghapus data siswa </li>
                    </ol>
                </li>
                <li>
                    Lima tombol cetak laporan
                    <ol type="a">
                        <li>tombol <a class="mb-2 text-white btn btn-dark">Copy</a> berfungsi untuk mengcopy data </li>
                        <li>tombol <a class="mb-2 text-white btn btn-dark">CSV</a> berfungsi untuk export ke csv</li>
                        <li>tombol <a class="mb-2 text-white btn btn-dark">Exsel</a> berfungsi untuk export ke Exsel</li>
                        <li>tombol <a class="mb-2 text-white btn btn-dark">PDF</a> berfungsi untuk export ke pdf</li>
                        <li>tombol <a class="mb-2 text-white btn btn-dark">Print</a> berfungsi untuk cetak di tempat</li>
                    </ol>
                </li>
            </ol>
        </div>
    </card>
</div>
@endsection