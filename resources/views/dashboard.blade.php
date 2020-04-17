@extends('layouts.main')

@section('content')

@section('js')
<!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
<script>
    $('.datatable').DataTable({
        responsive: true
    });

    $('.dataTable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
@endsection
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
    <!-- Tabel Transaksi Hari ini  -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar Transaksi Hari Ini
                    </h2>
                </div>
                @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div>
                    @endif

                @php
                    $i = 1
                @endphp
                <div class="table-responsive">
                <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>BUlan Dibayar</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$i++</td>
                                    <td>nama</td>
                                    <td>bulan_dibayar</td>
                                    <td>updated_at</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Answered  Tabel Transaksi Hari ini-->
</div>

@endsection
