@extends('website-pages.admin.admin_dashboard')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'View Product')
@section('admin')

    <body class="hold-transition sidebar-mini">


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>View Product</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('manage.all.products') }}">Back</a></li>
                                <li class="breadcrumb-item active">View Product</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h3 class="d-inline-block d-sm-none " style="font-weight: bold;text-transform: uppercase;">
                                    {{ $productt->name }}</h3>
                                <div class="col-12">
                                    <img src="{{ !empty($productt->thumb1) ? url('upload/thumb_images/' . $productt->thumb1) : url('upload/no_product.png') }}" class="product-image"
                                        alt="{{ $productt->name }}">
                                </div>






                                <div class="col-12 product-image-thumbs">
                                    @php
                                        // Decode the JSON string to get an array of image paths
                                        $imagePaths = json_decode($productt->images);
                                    @endphp

                                    @if (!empty($imagePaths))
                                        @foreach ($imagePaths as $path)
                                            <div class="product-image-thumb">
                                                <img src="{{ asset($path) }}" alt="Product Image">
                                            </div>
                                        @endforeach
                                    @endif
                                </div>


                            </div><br>
                            <div class="col-12 col-sm-6">
                                <h3 class="my-3 text-bold text-uppercase">{{ $productt->name }}</h3>


                                <hr>
                                <div class="row mt-4">
                                    <nav class="w-100">
                                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                                href="#product-desc" role="tab" aria-controls="product-desc"
                                                aria-selected="true">Description</a>

                                        </div>
                                    </nav>
                                    <div class="tab-content p-3" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                                            aria-labelledby="product-desc-tab"> {!! $productt->description !!}</div>

                                    </div>
                                </div>

                                <div class="bg-light py-2 px-3 mt-4">
                                    <h2 class="mb-0">
                                        $ {{ number_format($productt->sale_price, 2, '.', ',') }}
                                    </h2>
                                    <h4 class="mt-0">
                                        <small class="text-danger" style="text-decoration: line-through;">Regular Price: $
                                            {{ number_format($productt->price, 2, '.', ',') }}</small>

                                    </h4>
                                </div>

                                <div class="mt-4">
                                    @if ($productt->status == 'rejected')
                                        <div class="btn btn-danger btn-lg btn-flat text-uppercase">

                                            This Product Rejected
                                        </div>
                                    @elseif($productt->status == 'disapprove')
                                        <div class="btn btn-warning btn-lg btn-flat text-uppercase">
                                            This Product Disapprove
                                        </div>
                                    @elseif($productt->status == 'approve')
                                        <div class="btn btn-success btn-lg btn-flat text-uppercase">
                                            This Product Approved
                                        </div>
                                    @endif



                                </div>



                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->






    </body>

@endsection
