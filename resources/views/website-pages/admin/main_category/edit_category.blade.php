@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Catogory')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Catogory</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('all.category.list') }}">Back</a></li>
                            <li class="breadcrumb-item active">Edit Catogory</li>
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
                                        <form method="POST" action="{{route('update.category.list', $category->id) }}"
                                            class="form-horizontal">
                                            @csrf

                                                    <input type="hidden" class="form-control" name="id"
                                                        value="{{$category->id}}" >



                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                                        value="{{$category->name}}">

                                                        @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">



                                                    <select class="form-control" name="status" required>
                                                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Active</option>
                                                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Inactive</option>
                                                    </select>


                                                    @error('status')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Category
                                                    Photo</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-lable" name="photo" id="image">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label"></label>
                                                <div class="col-sm-10">
                                                    <img id="showImage" class="profile-user-img img-fluid img-circle"
                                                        src="{{ !empty($CategoryData->photo) ? url('upload/category_images/' . $CategoryData->photo) : url('upload/no_image.png') }}"
                                                        alt="Profile Picture">
                                                </div>
                                            </div>




                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Update Changes</button>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

@endsection
