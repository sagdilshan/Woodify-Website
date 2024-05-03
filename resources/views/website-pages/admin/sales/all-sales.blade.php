@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Sales')
@section('admin')



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>All Sales</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">All Sales</li>
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
                              <th>Product ID</th>
                              <th>Price</th>

                              <th>Seller ID</th>
                              <th>Customer ID</th>
                              <th>Order Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($allsales as $key => $item)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$item->product_id}}</td>
                                    <td>{{$item->price}}</td>

                                    <td>{{$item->seller_id}}</td>
                                    <td>{{$item->customer_id}}</td>
                                    <td>
                                        @if ($item->order_status == 'delivery')
                                            <span class="badge badge-success text-uppercase"
                                                style="font-size: 1rem;">Delivery</span>
                                        @elseif ($item->order_status == 'pending')
                                            <span class="badge badge-danger text-uppercase"
                                                style="font-size: 1rem;">Pending</span>
                                        @else
                                            <span class="badge badge-warning text-uppercase"
                                                style="font-size: 1rem;">Delivered</span>
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
    <!-- /.content -->
</div>



@endsection
