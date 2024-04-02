@extends('website-pages.seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Add Product')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('seller.all.products') }}">Back</a></li>
                            <li class="breadcrumb-item active">Add Product</li>
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
                                        <form method="POST" action="{{ route('seller.store.products') }}"
                                            class="form-horizontal" enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " name="name"
                                                        placeholder="Enter product name" required id="name">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Regular Price</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control " name="price"
                                                        placeholder="Enter regular price" required id="price">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Sale Price</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control " name="sale_price"
                                                        placeholder="Enter sale price" required id="sale_price">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Category</label>
                                                <div class="col-sm-10">
                                                    {{-- <input type="number" class="form-control " name="category_id"
                                                        placeholder="Enter Category Id" required id="category_id"/> --}}
                                                    <select class="form-control" id="category_id" name="category_id">
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Select Market</label>
                                                <div class="col-sm-10">
                                                    {{-- <input type="number" class="form-control " name="category_id"
                                                        placeholder="Enter Category Id" required id="category_id"/> --}}
                                                    <select class="form-control" id="sale_type" name="sale_type">

                                                            <option value="normal">Normal Market
                                                            </option>
                                                            <option value="sale">Sale Market
                                                            </option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea rows="4" class="form-control" name="description" placeholder="Description"></textarea>


                                                    @error('description')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>






                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Thumbnail
                                                    Image 1</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-lable"name="thumb1" id="thumb1"
                                                        >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Thumbnail
                                                    Image 2</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-lable"name="thumb2" id="thumb2"
                                                        >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Product
                                                    Photos</label>
                                                <div class="col-sm-10">
                                                    <input type="file" class="form-lable"name="images[]" id="images"
                                                        multiple accept="image/*" onchange="validateImageCount(this)">
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
