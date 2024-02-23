@extends('dashboard.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Bus</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Bus</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery Bus -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="card-title">Add Bus</h3>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="{{ route('show.bus') }}" class="btn btn-warning btn-sm">View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="BusName">Bus Name</label>
                                        <input type="text" name="bus_name"
                                            class="form-control @error('bus_name') is-invalid @enderror" id="BusName"
                                            placeholder="Enter Bus Name" value="{{ old('bus_name') }}">
                                        <span class="text-danger">
                                            @error('bus_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- -------- bus model -------  --}}
                                    <div class="form-group">
                                        <label for="BusModel">Bus Model</label>
                                        <input type="text" name="bus_model"
                                            class="form-control @error('bus_model') is-invalid @enderror" id="BusModel"
                                            placeholder="Enter Bus Model" value="{{ old('bus_model') }}">
                                        <span class="text-danger">
                                            @error('bus_model')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- ------- supervisor name -----  --}}
                                    <div class="form-group">
                                        <label for="SupervisorName">SuperVisor Name</label>
                                        <input type="text" name="supervisor_name"
                                            class="form-control @error('supervisor_name') is-invalid @enderror" id="SupervisorName"
                                            placeholder="Enter SupervisorName KM" value="{{ old('supervisor_name') }}">
                                        <span class="text-danger">
                                            @error('supervisor_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------- supervisor Numver -----  --}}
                                    <div class="form-group">
                                        <label for="SupervisorNumber">SuperVisor Number</label>
                                        <input type="text" name="supervisor_number"
                                            class="form-control @error('supervisor_number') is-invalid @enderror" id="SupervisorNumber"
                                            placeholder="Enter Supervisor Number" value="{{ old('supervisor_number') }}">
                                        <span class="text-danger">
                                            @error('supervisor_number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Bus</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
