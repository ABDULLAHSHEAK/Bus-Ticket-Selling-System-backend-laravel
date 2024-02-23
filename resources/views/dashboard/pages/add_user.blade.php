@extends('dashboard.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
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
                        <!-- jquery User -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="card-title">Add User</h3>
                                    </div>
                                    <div class="col-md-6"></div>
                                    <div class="col-md-2">
                                        <a href="{{ route('show.user') }}" class="btn btn-warning btn-sm">View</a>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="quickForm" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Full Name</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" id="UserName"
                                            placeholder="Enter User Name" value="{{ old('name') }}">
                                        <span class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    {{-- -------- Email -------  --}}
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" id="Useremail"
                                            placeholder="Enter Email" value="{{ old('email') }}">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------- Numver -----  --}}
                                    <div class="form-group">
                                        <label for="number">Number</label>
                                        <input type="text" name="number"
                                            class="form-control @error('number') is-invalid @enderror" id="Number"
                                            placeholder="Enter Number" value="{{ old('number') }}">
                                        <span class="text-danger">
                                            @error('number')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------- User Type -----  --}}
                                    <div class="form-group">
                                        <label for="user_type">User Type</label>
                                            <select name="user_type" id="UserType" class="form-control @error('user_type') is-invalid @enderror">
                                                <option>Select User Type</option>
                                                <option value="admin">Admin</option>
                                                <option value="customer">Customer</option>
                                            </select>
                                        <span class="text-danger">
                                            @error('user_type')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    {{-- ------- Password -----  --}}
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            placeholder="Enter Password" value="{{ old('password') }}">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add User</button>
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
