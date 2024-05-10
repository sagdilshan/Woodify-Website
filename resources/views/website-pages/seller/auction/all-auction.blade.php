@extends('website-pages.seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'My Auction Products')
@section('seller')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>My Auction Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('seller.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">My Auction Products</li>
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
                                <a href="{{ route('seller.add.auction') }}" class="btn btn-info">Add Auction Products</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Item Name</th>
                                            <th>Start Price</th>
                                            <th>End Date</th>
                                            <th>Description</th>
                                            <th>Auction Status</th>
                                            <th>Close Auction</th>


                                            {{-- <th>Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allauction as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>


                                                <td>{{ $item->p_name }}</td>
                                                <td>{{ $item->start_price }}</td>
                                                <td>{{ $item->end_date }}</td>
                                                <td>{{ $item->description }}</td>


                                                {{-- <td>{{ $item->category->name }}</td> --}}

                                                <td>
                                                    @php
                                                        $endDate = \Carbon\Carbon::parse($item->end_date);
                                                        $today = \Carbon\Carbon::today();
                                                    @endphp

                                                    @if ($endDate->isPast())
                                                        <span class="badge badge-danger text-uppercase" style="font-size: 1rem;">Expired</span>
                                                    @elseif ($endDate->isToday())
                                                        <span class="badge badge-warning text-uppercase" style="font-size: 1rem;">Expires Today</span>
                                                    @else
                                                        <span class="badge badge-success text-uppercase" style="font-size: 1rem;">Active</span>
                                                    @endif
                                                </td>

                                                {{-- <td>
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
                                                </td> --}}

                                                <td>
                                                    <a href="{{ route('seller.close.auction', $item->id) }}"
                                                        class="btn btn-outline-info">Close Auction</a>

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
