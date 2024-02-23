@extends('dashboard.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Trip</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Trip</li>
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
                        <!-- jquery Trip -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="card-title">Add Trip</h3>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="{{ route('show.trip') }}" class="btn btn-warning btn-sm">View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" method="POST">
                                @csrf
                                <div class="card-body">

                                    {{-- ------ bus name -------  --}}
                                    <div class="form-group">
                                        <label for="TripName">Bus Name</label>
                                        <select name="bus_name" id="BusName"
                                            class="form-control @error('bus_name') is-invalid @enderror">
                                            <option value="">Select Bus</option>
                                            @foreach ($bus as $data)
                                                <option value="{{ $data->id }}">{{ $data->bus_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('bus_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- -------- Trip Date -------  --}}
                                    <div class="form-group">
                                        <label for="TripDate">Trip Date</label>
                                        <input type="date" name="trip_date"
                                            class="form-control @error('trip_date') is-invalid @enderror" id="TripDate"
                                            placeholder="Enter Trip Model" value="{{ old('trip_date') }}">
                                        <span class="text-danger">
                                            @error('trip_date')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ---- Trip time ---------  --}}
                                    <div class="form-group">
                                        <label>Trip Time</label>
                                        <div class="input-group date" id="timepicker">
                                            <input type="time" name="trip_time"
                                                class="form-control @error('trip_time') is_invalid @enderror"
                                                data-target="#timepicker" value="{{ old('trip_time') }}" />
                                            <span class="text-danger">
                                                @error('trip_time')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!-- /.input group -->
                                    </div>

                                    {{-- ------ Start From -------  --}}
                                    <div class="form-group">
                                        <label for="StartFrom">Start From</label>
                                         <select name="start_from" id="BusName"
                                            class="form-control @error('start_from') is-invalid @enderror">
                                            <option value="">Select Your Starting Place</option>
                                            @foreach ($place as $start)
                                                <option value="{{ $start->id }}">{{ $start->place_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('start_from')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------ destination -------  --}}
                                    <div class="form-group">
                                        <label for="StartFrom">Destination</label>
                                          <select name="destination"
                                            class="form-control @error('destination') is-invalid @enderror">
                                            <option value="">Select Your Destination</option>
                                            @foreach ($place as $dest)
                                                <option value="{{ $dest->id }}">{{ $dest->place_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('destination')
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
