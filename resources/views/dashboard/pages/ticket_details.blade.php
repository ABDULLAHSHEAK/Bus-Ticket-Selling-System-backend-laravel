@extends('dashboard.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Invoice</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="callout callout-info">
                            <h5><i class="fas fa-info"></i> Note:</h5>
                            This page has been enhanced for printing. Click the print button at the bottom of the invoice to
                            test.
                        </div>


                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-4"><img src="{{ asset('admin/img/mas2.png') }}" alt=""
                                        width="100"> </div>
                                <div class="col-4 text-center">
                                    <h2>MAS-TICKET</h2>
                                    <h4 class="p-0">Buy Bus, Rail Ticket Online</h4>
                                </div>
                                <div class="col-4">
                                    <h4> <small class="float-right">Date: 2/10/2014</small></h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <hr>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-md-10 invoice-col">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel molestiae,
                                        reprehenderit impedit est maiores delectus, iste quidem reiciendis non similique
                                        laudantium a ab quae quibusdam fuga perferendis dolorem labore corrupti hic laborum
                                        debitis? Explicabo iure quidem velit! Blanditiis, ratione fugit labore voluptate
                                        amet odio asperiores, impedit itaque, alias qui animi recusandae rem quidem dolorum
                                        a.</p>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-2" style="text-align: right">
                                    <img src="{{ asset('admin/img/qr.jpg') }}" alt="qr code" width="100">
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <h3 class="bg-success p-1">Journy Information:</h3>
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Issu Date & Time</td>
                                                <td>{{ $data->created_at }}</td>
                                            </tr>
                                            <tr>
                                                <td>Journy Date & Time</td>
                                                <td>date:{{ $data->trip->trip_date }} | time: {{ $data->trip->trip_time }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Bus Name & Model</td>
                                                {{-- <td>Zenin</td> --}}
                                                <td>{{$data->trip->bus->bus_name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Start From</td>
                                                <td>{{ $data->StartFrom->place_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Destination</td>
                                                <td>{{ $data->Destination->place_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>No. Of Seats</td>
                                                <td>
                                                    @php
                                                        $total = $data->total_pare;
                                                        $single = $data->fare_per_seat;
                                                        $total_seat = $total / $single;

                                                    @endphp
                                                    {{ $total_seat }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Seat No:</td>
                                                <td class="badge bg-primary m-1">{{ $data->seat_no }}</td>
                                            </tr>
                                            <tr>
                                                <td>Fare Per Seat</td>
                                                <td>{{ $data->fare_per_seat }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total </td>
                                                <td>{{ $data->total_pare }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{-- ------ Customer Info --------  --}}
                                <div class="col-12 table-responsive">
                                    <h3 class="bg-success p-1">Passenger Information:</h3>
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Passenger Name</td>
                                                <td>{{ $data->user->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Passenger Email</td>
                                                <td>{{ $data->user->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Number</td>
                                                <td>{{ $data->user->number }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="{{ asset('admin') }}/dist/img/credit/visa.png" alt="Visa">
                                    <img src="{{ asset('admin') }}/dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="{{ asset('admin') }}/dist/img/credit/american-express.png"
                                        alt="American Express">
                                    <img src="{{ asset('admin') }}/dist/img/credit/paypal2.png" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya
                                        handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <p class="lead">Amount Due 2/22/2014</p>

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td>$250.30</td>
                                            </tr>
                                            <tr>
                                                <th>Tax (9.3%)</th>
                                                <td>$10.34</td>
                                            </tr>
                                            <tr>
                                                <th>Service Charge:</th>
                                                <td>$5.80</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td>$265.24</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                            class="fas fa-print"></i> Print</a>
                                    <button type="button" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button>
                                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
