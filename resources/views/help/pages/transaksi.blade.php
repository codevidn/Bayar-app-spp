@extends('layouts.help')

@section('content')
<div class="card">
    <card class="card-body">
        <h1>
            Cara Melakukan Transaksi
        </h1>
</br>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/transaksi/Screenshot_2020-04-16 Bayar.png')}}" alt="" >
                <b><i>Bambar 1 Cari Data Siswa</i></b>
            </div>
            <h4>Penjelasan</h4>
            <ol start="1">
                <li>Untuk melakukan transaksi anda tinggal cari siswa yang akan melakukan pembayaran spp dengan cara menginput NIS siswa yang akan melakukan pembayaran spp, kemudian tekan Enter untuk mencari</li>
            </ol>
        </div>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/transaksi/Screenshot_2020-04-16 Bayar(5).png')}}" alt="" >
                <b><i>Bambar 2 Menampilkan data yang di cari</i></b>
            </div>
            <h4>Penjelasan</h4>
            <ol start="1">
                <li>Setelah tampil data siswa yang akan melakukan pembayaran spp, anda cukup tekan tombol yang bertuliskan <button class="btn btn-primary">Lakukan Transaksi</button>, kemudian akan berpindah halaman.</li>
            </ol>
        </div>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/transaksi/Screenshot_2020-04-16 Bayar(6).png')}}" alt="" >
                <b><i>Bambar 3 Tampilan penempatan struk iuran bulanan</i></b>
            </div>
            <h4>Penjelasan</h4>
            <ol start="1">
                <li>Pada Tampilan Struk iuran bulanan, untuk melakukan transaksi pembayaran spp anda nya perlu mengklik tombol <button class="btn btn-primary"> bayar</button> pada bulan yang akan di bayar</li>
            </ol>
        </div>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/transaksi/Screenshot_2020-04-16 Bayar(8).png')}}" alt="" >
                <b><i>Bambar 4 Tampilan Setelah Di bayar</i></b>
            </div>
            <h4>Penjelasan</h4>
            <p>
                Setelah mengklik tombol bayar dan memilih ok pada alert aplikasi System akan menampilkan <span class="text-success">SPP Untuk Bulan ... Berhasil Dibayar</span>
            </p>
            <ol start="1">
                <li>Jika anda salah memilih bulan yang akan di bayar, untuk membatalkan pembayaran anda hanya perlu mengklik tombol <button class="btn btn-success">Lunas</button> Pada bulan yang salah dibayar</li>
            </ol>
        </div>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/transaksi/Screenshot_2020-04-16 Bayar(9).png')}}" alt="" >
                <b><i>Bambar 5 Tampilan Setelah Di Batalkan</i></b>
            </div>
            <h4>Penjelasan</h4>
            <ol start="1">
                <li>Setelah dibatalkan tombol pada bulan yang dibatalkan akan berubah kembali menjadi warna biru bertuliskan <button class="btn btn-primary">Bayar</button></li>
            </ol>
        </div>
    </card>
</div>
@endsection