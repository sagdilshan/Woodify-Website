@extends('website-pages.seller.seller_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Close Auction')
@section('seller')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Close Auction</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('seller.all.auction') }}">Back</a></li>
                            <li class="breadcrumb-item active">Close Auction</li>
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


                                    {{-- action="{{ route('my.close.auction', ['id' => $bids->id]) }}"   --}}
                                    <div class="active tab-pane">
                                        {{-- <form method="POST"
                                            class="form-horizontal">
                                            @csrf

                                            <input type="hidden" class="form-control" name="id"
                                                value="{{ $bids->id }}">
                                                <input type="hidden" class="form-control" name="seller_id"
                                                value="{{ $bids-> }}">
                                                <input type="hidden" class="form-control" name="quantity"
                                                value="{{ $bids-> }}">
                                                <input type="hidden" class="form-control" name="auction_product_id"
                                                value="{{ $bids-> }}">

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " name="auction_product_name"
                                                        value="{{ $bids-> }}" required id="	auction_product_name">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Thumbnail</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control " name="thumb_1"
                                                        value="{{ $bids-> }}" required id="thumb_1">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Customer Price</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control " name="customer_price"
                                                        value="{{ $bids-> }}" required id="price">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Customer Id</label>
                                                <div class="col-sm-10">
                                                    <input type="number" class="form-control " name="customer_id"
                                                        value="{{ $bids-> }}" required id="">
                                                </div>
                                            </div>





                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Save Changes</button>
                                                </div>
                                            </div>
                                        </form> --}}
                                        <form method="POST" class="form-horizontal" action="{{ route('my.close.auction') }}">
                                            @csrf

                                            @foreach ($bids as $bid)
                                                <input type="hidden" class="form-control" name="id"
                                                    value="{{ $bid->id }}" readonly>
                                                <input type="hidden" class="form-control" name="seller_id"
                                                    value="{{ $bid->seller_id }}" readonly>
                                                <input type="hidden" class="form-control" name="quantity"
                                                    value="{{ $bid->quantity }}" readonly>
                                                <input type="hidden" class="form-control" name="product_id"
                                                    value="{{ $bid->auction_product_id }}" readonly>

                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Product
                                                        Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                            name="product_name"
                                                            value="{{ $bid->auction_product_name }}" required
                                                            id="product_name" readonly>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Thumbnail</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="thumb"
                                                            value="{{ $bid->thumb_1 }}" required id="thumb" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Customer
                                                        Price</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="price"
                                                            value="{{ $bid->customer_price }}" required id="price" readonly>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Customer
                                                        Id</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" name="customer_id"
                                                            value="{{ $bid->customer_id }}" required id="" readonly>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success">Close Auction</button>
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
