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
    <!-- Exportable Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        DATA PETUGAS
                    </h2>
                    <ul class="header-dropdown m-r--5" style="color:#fff" >
                             <a href="{{ route('petugas.create')}}" class="btn text-white btn-success">
                             <i class="fas fa-plus"></i>
                            </a>
                             <a href="{{ route('petugas.index')}}" class="btn text-white btn-primary">
                             <i class="fas fa-sync"></i>
                            </a>
                    </ul>
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
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($petugas as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->name}}</td>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                    <form action="{{ route('petugas.destroy', $data->id) }}" method="POST">
                                        <div class="btn-group" role="group">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('petugas.edit', $data->id) }}" class="btn btn-warning waves-effect"><i class="fa fa-pencil-alt"></i></a>
                                            <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')"  class="btn btn-danger waves-effect"><i class="fa fa-trash"></i></button>
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</div>
@endsection
