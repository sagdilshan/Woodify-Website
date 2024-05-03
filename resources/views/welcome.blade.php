@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Woodify - Crafting Dreams into Wooden Reality')
@section('mainpage')



    <body class="template-index belle template-index-belle">

        <div class="pageWrapper">

            <div id="pre-loader">
                <img src="assetss/images/loader.gif" alt="Loading..." />
            </div>

            <!--Body Content-->
            <div id="page-content">
                <!--Home slider-->
                <div class="slideshow slideshow-wrapper pb-section sliderFull">
                    <div class="home-slideshow">
                        <div class="slide">
                            <div class="blur-up lazyload bg-size">
                                <img class="blur-up lazyload bg-img"
                                    data-src="assetss/images/slideshow-banners/belle-banner2.jpg"
                                    src="assetss/images/slideshow-banners/belle-banner2.jpg"
                                    alt="Create a Design of Your Choice" title="Create a Design of Your Choice" />
                                <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                    <div class="slideshow__text-content bottom">
                                        <div class="wrap-caption center">
                                            <h2 class="h1 mega-title slideshow__title">Create a Design of Your Choice.</h2>
                                            <span class="mega-subtitle slideshow__subtitle">
                                                We prioritize simplicity, memorability,
                                                scalability, modernity, versatility, timelessness, cleanliness,
                                                and impact.</span>
                                            <span class="btn" onclick="window.location='{{ route('shop') }}'">Shop
                                                Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="blur-up lazyload bg-size">
                                <img class="blur-up lazyload bg-img"
                                    data-src="assetss/images/slideshow-banners/belle-banner02.png"
                                    src="assetss/images/slideshow-banners/belle-banner02.png" alt="Summer Bikini Collection"
                                    title="Summer Bikini Collection" />
                                <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                    <div class="slideshow__text-content bottom">
                                        <div class="wrap-caption center">
                                            <h2 class="h1 mega-title slideshow__title">New Design Furnitures</h2>
                                            <span class="mega-subtitle slideshow__subtitle">Save up to 20% off </span>
                                            <span class="btn" onclick="window.location='{{ route('shop') }}'">Shop
                                                now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Home slider-->

                <!--Collection Tab slider-->
                <div class="tab-slider-product section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-header text-center">
                                    <h2 class="h2">New Designs</h2>
                                    <p>Browse the huge variety of your dream wooden decore</p>
                                </div>
                                <div class="tabs-listing">
                                    <ul class="tabs clearfix">
                                        <li class="active" rel="tab1">Home Decor</li>
                                        <li rel="tab2">Furniture</li>
                                        <li rel="tab3">Kitchen & Dining</li>
                                        <li rel="tab4">Office & Workpspace</li>
                                        <li rel="tab5">Toys & Games</li>
                                        <li rel="tab6">Gifts</li>
                                        <li rel="tab7">Accessories</li>
                                    </ul>
                                    <div class="tab_container">
                                        <div id="tab1" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 1)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <div id="tab2" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 2)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach



                                            </div>
                                        </div>
                                        <div id="tab3" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 3)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="tab4" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 5)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                        <div id="tab5" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 4)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="tab6" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 6)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>

                                        <div id="tab7" class="tab_content grid-products">
                                            <div class="productSlider">
                                                @foreach ($productss as $product)
                                                    @if ($product->category_id == 7)
                                                        <div class="col-12 item">
                                                            <!-- start product image -->
                                                            <div class="product-image">
                                                                <!-- start product image -->
                                                                <a
                                                                    href="{{ route('product.view', ['id' => $product->id]) }}">
                                                                    <!-- image -->
                                                                    <img class="primary blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End image -->
                                                                    <!-- Hover image -->
                                                                    <img class="hover blur-up lazyload"
                                                                        data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                                        alt="{{ $product->name }}"
                                                                        title="{{ $product->name }}">
                                                                    <!-- End hover image -->
                                                                    <!-- product label -->
                                                                    <div class="product-labels rectangular"><span
                                                                            class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                                    </div>
                                                                    <!-- End product label -->
                                                                </a>
                                                                <!-- end product image -->



                                                            </div>
                                                            <!-- end product image -->
                                                            <!--start product details -->
                                                            <div class="product-details text-center">
                                                                <!-- product name -->
                                                                <div class="product-name">
                                                                    <a
                                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                                </div>
                                                                <!-- End product name -->
                                                                <!-- product price -->
                                                                <div class="product-price">
                                                                    <span class="old-price">Regular Price: $
                                                                        {{ $product->price }}</span><br>
                                                                    <span class="price">Sale Price: $
                                                                        {{ $product->sale_price }}</span>
                                                                </div>
                                                                <!-- End product price -->



                                                            </div>
                                                            <!-- End product details -->
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Collection Tab slider-->

                <!--Collection Box slider-->
                <div class="collection-box section">
                    <div class="container-fluid">
                        <div class="collection-grid">

                            @foreach ($categories as $category)
                                <div class="collection-grid-item">
                                    <a href="#" class="collection-grid-item__link">
                                        <img data-src="{{ !empty($category->photo) ? url('upload/category_images/' . $category->photo) : url('upload/no_product.png') }}"
                                            src="{{ !empty($category->photo) ? url('upload/category_images/' . $category->photo) : url('upload/no_product.png') }}"
                                            alt="{{ $category->name }}" title="{{ $category->name }}"
                                            class="blur-up lazyload" />
                                        <div class="collection-grid-item__title-wrapper">
                                            <h3 class="collection-grid-item__title btn btn--secondary no-border">
                                                {{ $category->name }}</h3>
                                        </div>
                                    </a>
                                </div>
                            @endforeach





                        </div>
                    </div>
                </div>
                <!--End Collection Box slider-->

                <!--Featured Product-->
                <div class="product-rows section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-header text-center">
                                    <h2 class="h2">Featured collection</h2>
                                    <p>Our most popular products based on sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-products">
                            <div class="row">
                                @foreach ($products1 as $product)
                                    <div class="col-md-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                        <div class="grid-view_image">
                                            <!-- start product image -->
                                            <a href="{{ route('product.view', ['id' => $product->id]) }}"
                                                class="grid-view-item__link">
                                                <!-- image -->
                                                <img class="grid-view-item__image primary blur-up lazyload"
                                                    data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                    src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                    title="{{ $product->name }}" alt="{{ $product->name }}">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="grid-view-item__image hover blur-up lazyload"
                                                    data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                    src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                    title="{{ $product->name }}" alt="{{ $product->name }}">
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular"><span
                                                        class="lbl on-sale">{{ $product->percentage_decrease }}%</span>
                                                    <span class="lbl pr-label1">sale</span>
                                                </div>
                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->
                                            <!--start product details -->
                                            <div class="product-details hoverDetails text-center mobile">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a
                                                        href="{{ route('product.view', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price">${{ $product->sale_price }}</span>
                                                </div>
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
                                            <!-- Variant -->

                                            <!-- End Variant -->
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!--End Featured Product-->


                <!--Latest Blog-->
                <div class="latest-blog section pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-header text-center">
                                    <h2 class="h2">Latest From our tutorials</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            @foreach ($posts as $post)
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                    <div class="wrap-blog">
                                        <a href="{{ route('blog.show', ['id' => $post->id]) }}"
                                            class="article__grid-image">
                                            <img src="{{ !empty($post->photo) ? url('upload/post_images/' . $post->photo) : url('upload/no_product.png') }}"
                                                alt="{{ $post->title }}" title="{{ $post->title }}"
                                                class="blur-up lazyloaded" />
                                        </a>
                                        <div class="article__grid-meta article__grid-meta--has-image">
                                            <div class="wrap-blog-inner">
                                                <h2 class="h3 article__title">
                                                    <a
                                                        href="{{ route('blog.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                                </h2>
                                                <span
                                                    class="article__date">{{ $post->created_at->format('F d, Y') }}</span>
                                                <div class="rte article__grid-excerpt">
                                                    {{ Str::limit($post->content, 150, '...') }}
                                                </div>
                                                <ul class="list--inline article__meta-buttons">
                                                    <li><a href="{{ route('blog.show', ['id' => $post->id]) }}">Read
                                                            more</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!--End Latest Blog-->

                

                <!--Store Feature-->
                <div class="store-feature section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="display-table store-info">
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-truck-l"></i>
                                        <h5>Free Shipping &amp; Return</h5>
                                        <span class="sub-text">Free shipping on all US orders</span>
                                    </li>
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-dollar-sign-r"></i>
                                        <h5>Money Guarantee</h5>
                                        <span class="sub-text">30 days money back guarantee</span>
                                    </li>
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-comments-l"></i>
                                        <h5>Online Support</h5>
                                        <span class="sub-text">We support online 24/7 on day</span>
                                    </li>
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-credit-card-front-r"></i>
                                        <h5>Secure Payments</h5>
                                        <span class="sub-text">All payment are Secured and trusted.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Store Feature-->
            </div>
            <!--End Body Content-->






        </div>
    </body>

    </html>
@endsection
