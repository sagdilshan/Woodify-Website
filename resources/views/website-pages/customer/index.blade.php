@extends('website-pages.customer.customer_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Customer Dashboard')
@section('customer')
    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <div class="content-header ">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                        <h4 class="m-0"> Welcome Back <span style="color:red;"> {{ Auth::user()->name }}</span> !!! 🎉🎉🎉
                        </h4>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Overview</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <!-- /.content-header -->




        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-gray">
                            <div class="inner">
                                <h3>{{ $total_orders }}</h3>

                                <p style="font-size: 1.5rem;">My Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <a href="{{ route('past.orders') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-6 col-sm-6">
                        <!-- small card -->
                        <div class="small-box bg-gradient-teal">
                            <div class="inner">
                                <h3>{{ $pending_orders }}</h3>

                                <p style="font-size: 1.5rem;">Pending Orders</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-archive"></i>
                            </div>
                            <a href="{{ route('customer.dashboard') }}" class="small-box-footer">
                                More info <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- ./col -->


                </div>

            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="col-sm-6">
                                <h3>Pending Orders</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Order Status</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>


                                                <td>{{ $item->product_name }}</td>
                                                <td>
                                                    @if ($item->order_status == 'delivery')
                                                        <span class="badge badge-warning text-uppercase"
                                                            style="font-size: 1rem;">Delivery</span>
                                                    @elseif ($item->order_status == 'delivered')
                                                        <span class="badge badge-success text-uppercase"
                                                            style="font-size: 1rem;">Delivery Completed</span>
                                                    @else
                                                        <span class="badge badge-danger text-uppercase"
                                                            style="font-size: 1rem;">{{ $item->order_status }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->price }}</td>




                                            </tr>
                                        @endforeach


                                        </tfoot>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
