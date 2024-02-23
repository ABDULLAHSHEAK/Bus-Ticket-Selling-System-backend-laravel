@extends('dashboard.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Location</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Location</li>
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
                        <!-- jquery Location -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="card-title">Add Location</h3>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="{{ route('show.location') }}" class="btn btn-warning btn-sm">View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="" id="quickForm" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="PlaceName">Place Name</label>
                                        <input type="text" name="place"
                                            class="form-control @error('place') is-invalid @enderror" id="PlaceName"
                                            placeholder="Enter Place Name" value="{{ $data->place_name }}">
                                        <span class="text-danger">
                                            @error('place')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>


                                    <div class="form-group">
                                        <label for="Distance">Distance KM</label>
                                        <input type="text" name="distance_km"
                                            class="form-control @error('distance_km') is-invalid @enderror" id="Distance"
                                            placeholder="Enter Distance KM" value="{{ $data->distance_km }}">
                                        <span class="text-danger">
                                            @error('distance_km')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="stopage_order">Stopage Order</label>
                                        <input type="number" name="stopage_order"
                                            class="form-control @error('stopage_order') is-invalid
                    @enderror"
                                            id="stopage_order" placeholder="Stopage Order"
                                            value="{{ $data->stopage_order }}">
                                        <span class="text-danger">
                                            @error('stopage_order')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save Location</button>
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
