@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row clearfix">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <!-- card// 1 -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-zoom-effect">
                <div class="icon bg-indigo">
                    <i class="material-icons">face</i>
                </div>
                <div class="content">
                    <div class="text">USER</div>
                    <div class="number">{{$data['user']}}</div>
                </div>
            </div>
        </div>
        <!--  --> 
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-zoom-effect">
                <div class="icon bg-light-green">
                    <i class="material-icons">equalizer</i>
                </div>
                <div class="content">
                    <div class="text">KELAS</div>
                    <div class="number">{{ $data['kelas']}}</div>
                </div>
            </div>
        </div>
        <!-- card// 3 -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-zoom-effect">
                <div class="icon bg-pink">
                    <i class="fa fa-user-secret"></i>
                </div>
                <div class="content">
                    <div class="text">PETUGAS</div>
                    <div class="number">{{$data['petugas']}}</div>
                </div>
            </div>
        </div>
        <!-- card// 4 -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box hover-zoom-effect">
                <div class="icon bg-cyan">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="content">
                    <div class="text">TRANSAKSI</div>
                    <div class="number">{{$data['transaksi']}}</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Answered Tickets -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">RIWAYAT TRANSAKSI</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>{{$data['transaksi']}}</b> <small>Transaksi</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>15</b> <small>Transaksi</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>90</b> <small>Transaksi</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b>342</b> <small>Transaksi</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b>4 225</b> <small>USERS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b>8 752</b> <small>USERS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
                <!-- #END# Answered Tickets -->
</div>

@endsection
