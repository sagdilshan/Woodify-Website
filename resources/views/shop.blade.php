@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Shop')
@section('mainpage')



    <body class="template-collection belle">
        <div class="pageWrapper">

            <br><br><br>
            <!--Body Content-->
            <div id="page-content">
                <!--Collection Banner-->
                <div class="collection-header">
                    <div class="collection-hero">
                        <div class="collection-hero__image"><img class="blur-up lazyload"
                                data-src="assetss/images/cat-women2.jpg" src="assetss/images/cat-women2.jpg" alt="Women"
                                title="Women" /></div>
                        <div class="collection-hero__title-wrapper">
                            <h1 class="collection-hero__title page-width">Woodify Shop</h1>
                        </div>
                    </div>
                </div>
                <!--End Collection Banner-->
                <br><br>
                <div class="container-fluid">
                    <div class="row">
                        <!--Sidebar-->

                        <!--End Sidebar-->
                        <!--Main Content-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                            <div class="productList">

                                <div class="grid-products grid--view-items">
                                    <div class="row">
                                        @foreach ($productss as $product)
                                            <div class="col-md-6 col-sm-6 col-md-4 col-lg-3 grid-view-item style2 item">
                                                <div class="grid-view_image">
                                                    <!-- start product image -->
                                                    <a href="{{ route('product.view', ['id' => $product->id]) }}" class="grid-view-item__link">
                                                        <!-- image -->
                                                        <img class="grid-view-item__image primary blur-up lazyload"
                                                            data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                            src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                            alt="{{ $product->name }}" title="{{ $product->name }}">
                                                        <!-- End image -->
                                                        <!-- Hover image -->
                                                        <img class="grid-view-item__image hover blur-up lazyload"
                                                            data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                            src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                            alt="{{ $product->name }}" title="{{ $product->name }}">
                                                        <!-- End hover image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span
                                                                class="lbl on-sale">{{ $product->percentage_decrease }}%</span> <span
                                                                class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details hoverDetails text-center mobile">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="old-price">$ {{ $product->price }}</span>
                                                            <span class="price">$ {{ $product->sale_price }}</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <!-- product button -->
                                                        <div class="button-set">

                                                            <!-- Start product button -->
                                                            <form class="variants add">
                                                                <a class="btn cartIcon btn-addto-cart"
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}"><i
                                                                        class="icon anm anm-eye-r"></i></a>
                                                            </form>

                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>
                                        @endforeach



                                    </div>
                                </div>
                            </div>
                            <!--End Main Content-->

                        </div>
                    </div>
                </div>
                <!--End Body Content-->





            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- JavaScript to handle Load More button -->

    </body>


@endsection
