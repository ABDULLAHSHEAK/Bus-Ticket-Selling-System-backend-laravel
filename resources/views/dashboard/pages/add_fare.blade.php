@extends('dashboard.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Fare</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Fare</li>
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
                                        <h3 class="card-title">Add Fare</h3>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="{{ route('show.fare') }}" class="btn btn-warning btn-sm">View</a>
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
                                        <label for="TripName">Base Location</label>
                                        <select name="base_location" id="BaseLocation"
                                            class="form-control @error('base_location') is-invalid @enderror">
                                            <option>Select Base Location</option>
                                            @foreach ($fares as $data)
                                                <option value="{{ $data->id }}">{{ $data->place_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('base_location')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------ Start Location -------  --}}
                                    <div class="form-group">
                                        <label for="StartLocation">Start Location</label>
                                        <select name="start_from" id="StartLocation"
                                            class="form-control @error('start_from') is-invalid @enderror">
                                            <option>Select Start Location</option>
                                            @foreach ($fares as $data)
                                                <option value="{{ $data->id }}">{{ $data->place_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('start_from')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------ End Location -------  --}}
                                    <div class="form-group">
                                        <label for="EndLocation">End Location</label>
                                        <select name="destination" id="EndLocation"
                                            class="form-control @error('destination') is-invalid @enderror">
                                            <option>Select End Location</option>
                                            @foreach ($fares as $data)
                                                <option value="{{ $data->id }}">{{ $data->place_name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger">
                                            @error('destination')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>


                                    {{-- -------- fare_amount -------  --}}
                                    <div class="form-group">
                                        <label for="FareAmount">Fare Amount</label>
                                        <input type="text" name="fare_amount"
                                            class="form-control @error('fare_amount') is-invalid @enderror" id="FareAmount"
                                            placeholder="Enter Fare Amount" value="{{ old('fare_amount') }}">
                                        <span class="text-danger">
                                            @error('fare_amount')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ---- Trip time ---------  --}}
                                    <div class="form-group">
                                        <label>Effected Date</label>
                                        <div class="input-group date" id="timepicker">
                                            <input type="Date" name="effect_from"
                                                class="form-control @error('effect_from') is_invalid @enderror"
                                                data-target="#timepicker" placeholder="Enter Date" value="{{ old('effect_from') }}" />
                                            <span class="text-danger">
                                                @error('effect_from')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!-- /.input group -->
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
