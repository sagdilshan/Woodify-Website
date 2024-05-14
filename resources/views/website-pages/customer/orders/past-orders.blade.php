@extends('website-pages.customer.customer_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'My Orders')
@section('customer')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Shipping Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('customer.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">My Orders</li>
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

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Order Status</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pastorders as $key => $item)
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
                                                <td>
                                                    
                                                    @if ($item->order_status == 'delivery')
                                                        <form method="POST"
                                                            action="{{ route('update.order.status', $item->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit" class="btn btn-outline-danger">Order
                                                                Received</button>
                                                        </form>
                                                    @endif
                                                </td>



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


        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Completed Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('customer.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">My Orders</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Order Status</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($completeorders as $key => $item)
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
