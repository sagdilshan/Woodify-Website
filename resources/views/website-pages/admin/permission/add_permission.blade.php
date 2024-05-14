@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Add Permission')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Permission</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('all.permission') }}">Back</a></li>
                            <li class="breadcrumb-item active">Add Permission</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content ">
            <div class="container-fluid ">
                <div class="row">

                    <!-- /.col -->
                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content">



                                    <div class="active tab-pane" id="settings">
                                        <form method="POST" action="{{ route('store.permission') }}"
                                            class="form-horizontal">
                                            @csrf


                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Permission
                                                    Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" placeholder="Enter permission name">

                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="groupName" class="col-sm-2 col-form-label">Group Name</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="group_name">
                                                        <option selected="" disabled="">Select Group</option>
                                                        <option value="category">Category</option>
                                                        <option value="product">Product</option>
                                                    </select>

                                                    @error('group_name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>





                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>



@endsection
