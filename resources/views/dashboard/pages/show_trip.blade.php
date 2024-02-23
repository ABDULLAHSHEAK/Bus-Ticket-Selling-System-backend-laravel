@extends('dashboard.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Trips</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">All Trips</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="card-title">All Trips</h3>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="{{ route('add.trip') }}" class="btn btn-warning btn-sm">Add New</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S/L</th>
                                            <th>Bus Name</th>
                                            <th>Trip Date</th>
                                            <th>Trip Time</th>
                                            <th>Start From</th>
                                            <th>Destination</th>
                                            <th>Createt at</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tripes as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data->bus->bus_name }}</td>
                                                <td>{{ $data->trip_date }}</td>
                                                <td>{{ $data->trip_time }}</td>
                                                <td>{{ $data->StartLocation->place_name }}</td>
                                                <td>{{ $data->EndLocation->place_name }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('edit.trip', $data->id) }}"
                                                        class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="{{ url('show-trip', $data->id) }}"
                                                        class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    @push('js')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/jszip/jszip.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('admin') }}/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
    @endpush
@endsection
