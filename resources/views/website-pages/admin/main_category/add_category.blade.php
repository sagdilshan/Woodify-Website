@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Add Catogory')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Catogory</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('all.category.list') }}">Back</a></li>
                            <li class="breadcrumb-item active">Add Catogory</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.cont ainer-fluid -->
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
                                        <form method="POST" action="{{ route('store.category.list') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Category Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        name="name" placeholder="Enter catogory name" required id="name" >

                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row" >
                                                <label for="inputName" class="col-sm-2 col-form-label">Slug Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                        class="form-control @error('slug') is-invalid @enderror"
                                                        name="slug" placeholder="Enter slug name" id="slug" required readonly>

                                                    @error('slug')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">

                                                    <select class="form-control" name="status" required>

                                                        <option {{ old('status') == 0 ? 'selected' : '' }} value="0">
                                                            Active</option>
                                                        <option {{ old('status') == 1 ? 'selected' : '' }} value="1">
                                                            Deactive</option>
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
                                                        src="{{ !empty($profileData->photo) ? url('upload/category_images/' . $profileData->photo) : url('upload/no_image.png') }}"
                                                        alt="Profile Picture">
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

    <script>
        $(document).ready(function() {
            // Function to generate slug from category name
            function slugify(text) {
                return text.toString().toLowerCase()
                    .replace(/\s+/g, '-') // Replace spaces with -
                    .replace(/[^\w\-]+/g, '') // Remove all non-word chars
                    .replace(/\-\-+/g, '-') // Replace multiple - with single -
                    .replace(/^-+/, '') // Trim - from start of text
                    .replace(/-+$/, ''); // Trim - from end of text
            }

            // Listen for changes in the category name input field
            $('#name').on('input', function() {
                var name = $(this).val(); // Get the value of the category name input field
                var slug = slugify(name); // Generate slug from the category name
                $('#slug').val(slug); // Set the generated slug in the slug input field
            });
        });
    </script>

@endsection
