@extends('website-pages.seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'My Products')
@section('seller')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('seller.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Products</li>
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
                            <div class="card-header d-flex justify-content-end">
                                <a href="{{ route('seller.add.products') }}" class="btn btn-info">Add Products</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Name</th>
                                            <th>Regular Price</th>
                                            <th>Sale Price</th>
                                            <th>Category</th>
                                            <th>Stocks</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allProducts as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>


                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->sale_price }}</td>

                                                <td>{{ $item->category->name }}</td>


                                                <td>
                                                    @if ($item->stock_status == 'stock')
                                                        <span class="badge badge-primary text-uppercase" style="font-size: 1rem;">Stocks</span>
                                                    @elseif ($item->stock_status == 'out_of_stock')
                                                        <span class="badge badge-dark text-uppercase" style="font-size: 1rem;">Out of Stocks</span>
                                                    @else
                                                        <span class="badge badge-danger text-uppercase" style="font-size: 1rem;">Error</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->status == 'approve')
                                                        <span class="badge badge-success text-uppercase" style="font-size: 1rem;">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'disapprove')
                                                        <span class="badge badge-warning text-uppercase" style="font-size: 1rem;">{{ $item->status }}</span>
                                                    @else
                                                        <span class="badge badge-danger text-uppercase" style="font-size: 1rem;">{{ $item->status }}</span>
                                                    @endif
                                                </td>

                                                <td>
                                                    <a href="{{ route('seller.edit.products', $item->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('seller.view.products', $item->id) }}"
                                                        class="btn btn-outline-success" >View</a>
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
