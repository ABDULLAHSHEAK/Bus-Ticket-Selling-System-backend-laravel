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
                            <form id="quickForm" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="PlaceName">Place Name</label>
                                        <input type="text" name="place"
                                            class="form-control @error('place') is-invalid @enderror" id="PlaceName"
                                            placeholder="Enter Place Name" value="{{ old('place') }}">
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
                                            placeholder="Enter Distance KM" value="{{ old('distance_km') }}">
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
                                            value="{{ old('stopage_order') }}">
                                        <span class="text-danger">
                                            @error('stopage_order')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
    @push('js')
    <script src=" {{asset('admin')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src=" {{asset('admin')}}/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src=" {{asset('admin')}}/dist/js/adminlte.min.js"></script>
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      place: {
        required: true,
      },
      distance_km: {
        required: true,
      },
      stopage_order: {
        required: true,
      },
    },
    messages: {
      place: {
        required: "Please enter a Place Name",
        email: "Please enter a valid Place Name"
      },
      distance_km: {
        required: "Please provide KM",
        minlength: "Enter KM"
      },
      stopage_order: {
        required: "Please provide stopage_order",
        minlength: "Enter stopage_order"
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
    @endpush
@endsection
