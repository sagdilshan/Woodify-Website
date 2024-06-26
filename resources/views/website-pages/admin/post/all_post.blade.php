@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'All Post')
@section('admin')



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">All Post</li>
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
                                <a href="{{ route('add.post') }}" class="btn btn-success">Add Post</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Post ID</th>
                                            <th>Post Image</th>
                                            <th>Post Name</th>
                                            <th>Added By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    @if (!empty($item->photo) && file_exists(public_path('upload/post_images/' . $item->photo)))
                                                        <img src="{{ url('upload/post_images/' . $item->photo) }}"
                                                            class="img-circle img-size-50 mr-2">
                                                    @else
                                                        <img src="{{ url('upload/no_image.png') }}"
                                                            class="img-circle img-size-50 mr-2">
                                                    @endif
                                                </td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->user->name ?? 'No user' }}</td>

                                                <td>
                                                    <a href="{{ route('edit.post', $item->id) }}"
                                                        class="btn btn-outline-info">Edit</a>
                                                    <a href="{{ route('delete.post', $item->id) }}"
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
