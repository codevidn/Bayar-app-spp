@extends('layouts.help')

@section('content')
<div class="card">
    <card class="card-body">
        <h3>
            Pengenalan Aplikasi
        </h3>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem fugit accusamus modi quam minus doloremque culpa et facilis eos architecto hic quasi eum, aut velit quos voluptas earum voluptate quod!
        </p>
        <div class="content">
            <h3>
                Author
            </h3>
            <p>
                <span class="text-danger">Muhammad Luthfi</span>
            </p>
        </div>
        <div class="row justify-content-center">
            <h3>
                Daftar Isi
            </h3>
        </div>
            <ol start="1">
                <li><b>Daftar Isi</b></li>
                <li><a href="{{ route('hlogin') }}">Cara Masuk Ke Aplikasi</a></li>
                <li><a href="{{ route('hlogin') }}">Cara Melakukan Transaksi</a></li>
                <li><a href="{{ route('hlogin') }}">Kelola Data Kelas</a></li>
                <li><a href="{{ route('hlogin') }}">Kelola Data Siswa</a></li>
                <li><a href="{{ route('hlogin') }}">Cara Melakukan Report Data</a></li>
            </ol>
    </card>
</div>
@endsection