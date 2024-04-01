@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Edit Product')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('manage.all.products') }}">Back</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
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



                                    <div class="active tab-pane">
                                        <form method="POST"
                                            action="{{ route('manage.update.products', ['id' => $products->id]) }}"
                                            class="form-horizontal">
                                            @csrf

                                            <input type="hidden" class="form-control" name="id"
                                                value="{{ $products->id }}">








                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">

                                                    <select class="form-control" id="category_id" name="category_id">

                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}"
                                                                {{ $products->category_id == $category->id ? 'selected' : '' }}>
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">

                                                    <select class="form-control" id="status" name="status">

                                                        @foreach ($statuses as $status)
                                                            <option value="{{ $status }}"
                                                                {{ $products->status == $status ? 'selected' : '' }}>
                                                                {{ ucfirst($status) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const priceInput = document.getElementById('price');
            const salePriceInput = document.getElementById('sale_price');

            // Function to check if sale price is greater than price
            const validateSalePrice = () => {
                const price = parseFloat(priceInput.value);
                const salePrice = parseFloat(salePriceInput.value);

                if (salePrice > price) {
                    // If sale price is greater than price, display an error message
                    salePriceInput.setCustomValidity('Sale price cannot be greater than the regular price');
                } else {
                    // Otherwise, clear the error message
                    salePriceInput.setCustomValidity('');
                }
            };

            // Call the validateSalePrice function whenever the price or sale price changes
            priceInput.addEventListener('input', validateSalePrice);
            salePriceInput.addEventListener('input', validateSalePrice);
        });
    </script>
    <script>
        function validateImageCount(input) {
            // Get the number of files selected
            var fileCount = input.files.length;

            // If more than 5 files are selected, show an alert and clear the input
            if (fileCount > 5) {
                alert("You can upload a maximum of 5 images.");
                input.value = ''; // Clear the input
            }
        }
    </script>

@endsection
