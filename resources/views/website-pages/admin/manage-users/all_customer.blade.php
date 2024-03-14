@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Customers')
@section('admin')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Customers</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Customers</li>
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
                                <a href="{{ route('add.users') }}" class="btn btn-success">Add Customers</a>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allcustomer as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>

                                                        <td>
                                                            @if (!empty($item->photo) && file_exists(public_path('upload/customer_images/' . $item->photo)))
                                                                <img src="{{ url('upload/customer_images/' . $item->photo) }}" class="img-circle img-size-50 mr-2">
                                                            @else
                                                                <img src="{{ url('upload/no_image.png') }}" class="img-circle img-size-50 mr-2">
                                                            @endif
                                                        </td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td>
                                                    @if ($item->status == 'active')
                                                        <span class="badge badge-success text-uppercase" style="font-size: 1rem;">{{ $item->status }}</span>
                                                    @elseif ($item->status == 'deactive')
                                                        <span class="badge badge-danger text-uppercase" style="font-size: 1rem;">{{ $item->status }}</span>
                                                    @else
                                                        <span class="badge badge-warning text-uppercase" style="font-size: 1rem;">{{ $item->status }}</span>
                                                    @endif
                                                </td>





                                                <td>
                                                    <a href="{{ route('edit.customer', $item->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('delete.customer', $item->id) }}"
                                                        class="btn btn-outline-danger" id="delete">Delete</a>
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
