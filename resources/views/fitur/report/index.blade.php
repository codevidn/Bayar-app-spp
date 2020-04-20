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
                                    <th>Nama Siswa</th>
                                    <th>Nama Petugas</th>
                                    <th>Bulan Dibayar</th>
                                    <th>Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data['transaksi'] as $get)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$get->nama}}</td>
                                    <td>{{$get->name}}</td>
                                    <td>{{$get->bulan_dibayar}}</td>
                                    <td>{{ $get->tgl_bayar }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Daftar User
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
                                    <th>Nama Pengguna</th>
                                    <th>Email </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data['user'] as $get)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{$get->name}}</td>
                                    <td>{{$get->username}}</td>
                                    <td>{{ $get->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection