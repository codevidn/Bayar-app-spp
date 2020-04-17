@extends('layouts.help')

@section('content')
<div class="card">
    <card class="card-body">
        <h1>
            Cara Masuk Ke Aplikasi
        </h1>
</br>
        <div class="content">
            <div class="image row justify-content-center">
                <img class="col-12" src="{{ asset('images/help-page/login/Screenshot-1.png')}}" alt="" >
                <b><i>Bambar 1 Form Login Aplikasi</i></b>
            </div>
            <h4>Langkah-langkah</h4>
            <ol start="1">
                <li>Masukan Username atau Email yang terdaftar di Aplikasi</li>
                <li>Masukan password anda</li>
                <li>Jka anda ingin mentimpan sesi login anda, maka anda misa mencentang box bertuliskan Remember me [ingat saya]</li>
                <li>Dan jika anda lupa dengan password anda makan anda bisa mengklik tulisan <a href="">Forgot Password?</a> dan ikuti langkah-langkahnya</li>
                <li>Klik tombol login bila Usernam atau email dan passwordnya sudah diisi</li>
                <li>Maka akan di arahkan langsung ke halaman utama aplikasi</li>
            </ol>
        </div>
    </card>
</div>
@endsection