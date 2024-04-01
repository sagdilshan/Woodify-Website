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
                                            <span class="btn">Shop Now</span>
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
                                            <span class="btn">Shop now</span>
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
                                        <li rel="tab6">Sale</li>
                                    </ul>
                                    <div class="tab_container">
                                        <div id="tab1" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/woodify/product1.jpeg"
                                                                src="assetss/images/woodify/product1.jpeg" alt="image"
                                                                title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/woodify/product1.jpeg"
                                                                src="assetss/images/woodify/product1.jpeg" alt="image"
                                                                title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span
                                                                    class="lbl on-sale">-16%</span> <span
                                                                    class="lbl pr-label1">new</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->
                                                        <div class="saleTime desktop" data-countdown="2024/03/01"></div>
                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->
                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Round Sofa</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="old-price">$50.00</span>
                                                            <span class="price">$40.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>

                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/woodify/product2.jpg"
                                                                src="assetss/images/woodify/product2.jpg" alt="image"
                                                                title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/woodify/product2.jpg"
                                                                src="assetss/images/woodify/product2.jpg" alt="image"
                                                                title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add to Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">3 Row Table</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$100.00</span>
                                                        </div>
                                                        <!-- End product price -->
                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        </div>

                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/woodify/product3.jpg"
                                                                src="assetss/images/woodify/product3.jpg" alt="image"
                                                                title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/woodify/product3.jpg"
                                                                src="assetss/images/woodify/product3.jpg" alt="image"
                                                                title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span
                                                                    class="lbl pr-label2">Hot</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">3/4 Sleeve Kimono Dress</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$550.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>

                                                    </div>
                                                    <!-- End product details -->
                                                </div>

                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/woodify/product6.png"
                                                                src="assetss/images/woodify/product6.png" alt="image"
                                                                title="product" />
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/woodify/product6.png"
                                                                src="assetss/images/woodify/product6.png" alt="image"
                                                                title="product" />
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels"><span
                                                                    class="lbl on-sale">Sale</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Select Options</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Paper Dress</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$550.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        </div>

                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab2" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image6.jpg"
                                                                src="assetss/images/product-images/product-image6.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image6-1.jpg"
                                                                src="assetss/images/product-images/product-image6-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span
                                                                    class="lbl on-sale">-16%</span> <span
                                                                    class="lbl pr-label1">new</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Zipper Jacket</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$788.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image7.jpg"
                                                                src="assetss/images/product-images/product-image7.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image7-1.jpg"
                                                                src="assetss/images/product-images/product-image7-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Select Options</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Zipper Jacket</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$748.00</span>
                                                        </div>
                                                        <!-- End product price -->
                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image8.jpg"
                                                                src="assetss/images/product-images/product-image8.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image8-1.jpg"
                                                                src="assetss/images/product-images/product-image8-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>

                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Workers Shirt Jacket</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$238.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image9.jpg"
                                                                src="assetss/images/product-images/product-image9.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image9-1.jpg"
                                                                src="assetss/images/product-images/product-image9-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Watercolor Sport Jacket in
                                                                Brown/Blue</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$348.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>

                                            </div>
                                        </div>
                                        <div id="tab3" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11.jpg"
                                                                src="assetss/images/product-images/product-image11.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11-1.jpg"
                                                                src="assetss/images/product-images/product-image11-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->
                                                        <!-- countdown start -->
                                                        <div class="saleTime desktop" data-countdown="2024/03/01"></div>
                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Azur Bracelet in Blue
                                                                Azurite</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$168.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image12.jpg"
                                                                src="assetss/images/product-images/product-image12.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image12-1.jpg"
                                                                src="assetss/images/product-images/product-image12-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Select Options</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Bi-Goutte Earrings</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$58.00</span>
                                                        </div>
                                                        <!-- End product price -->
                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image13.jpg"
                                                                src="assetss/images/product-images/product-image13.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image13-1.jpg"
                                                                src="assetss/images/product-images/product-image13-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>

                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Ashton Necklace</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$228.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image14.jpg"
                                                                src="assetss/images/product-images/product-image14.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image14-1.jpg"
                                                                src="assetss/images/product-images/product-image14-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Ara Ring</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$198.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                            </div>
                                        </div>
                                        <div id="tab4" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11.jpg"
                                                                src="assetss/images/product-images/product-image11.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11-1.jpg"
                                                                src="assetss/images/product-images/product-image11-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->
                                                        <!-- countdown start -->
                                                        <div class="saleTime desktop" data-countdown="2024/03/01"></div>
                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Azur Bracelet in Blue
                                                                Azurite</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$168.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>

                                            </div>
                                        </div>
                                        <div id="tab5" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11.jpg"
                                                                src="assetss/images/product-images/product-image11.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11-1.jpg"
                                                                src="assetss/images/product-images/product-image11-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->
                                                        <!-- countdown start -->
                                                        <div class="saleTime desktop" data-countdown="2024/03/01"></div>
                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Azur Bracelet in Blue
                                                                Azurite</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$168.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>

                                            </div>
                                        </div>
                                        <div id="tab6" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="#">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11.jpg"
                                                                src="assetss/images/product-images/product-image11.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image11-1.jpg"
                                                                src="assetss/images/product-images/product-image11-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->
                                                        <!-- countdown start -->
                                                        <div class="saleTime desktop" data-countdown="2024/03/01"></div>
                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='#'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <div class="button-set">
                                                            <a href="javascript:void(0)" title="Quick View"
                                                                class="quick-view-popup quick-view" data-toggle="modal"
                                                                data-target="#content_quickview">
                                                                <i class="icon anm anm-search-plus-r"></i>
                                                            </a>
                                                            <div class="wishlist-btn">
                                                                <a class="wishlist add-to-wishlist" href="#">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="#"
                                                                    title="Add to Compare">
                                                                    <i class="icon anm anm-random-r"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- end product button -->
                                                    </div>
                                                    <!-- end product image -->

                                                    <!--start product details -->
                                                    <div class="product-details text-center">
                                                        <!-- product name -->
                                                        <div class="product-name">
                                                            <a href="#">Azur Bracelet in Blue
                                                                Azdgdg</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$168.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                    <!-- End product details -->
                                                </div>

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
                                        <img data-src="{{ !empty($category->photo) ? url('upload/category_images/' . $category->photo) : url('upload/no_image.png') }}"
                                            src="{{ !empty($category->photo) ? url('upload/category_images/' . $category->photo) : url('upload/no_image.png') }}"
                                            alt="{{ $category->name }}" title="{{ $category->name }}"
                                            class="blur-up lazyload" />
                                        <div class="collection-grid-item__title-wrapper">
                                            <h3 class="collection-grid-item__title btn btn--secondary no-border">
                                                {{ $category->name }}</h3>
                                        </div>
                                    </a>
                                </div>
                            @endforeach



                            {{-- <div class="collection-grid-item">
                                <a href="#" class="collection-grid-item__link">
                                    <img class="blur-up lazyload" data-src="assetss/images/woodify/furniture.png"
                                        src="assetss/images/woodify/furniture.png" alt="Furniture" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Furniture
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="#" class="collection-grid-item__link">
                                    <img class="blur-up lazyload" data-src="assetss/images/woodify/kitchen.png"
                                        src="assetss/images/woodify/kitchen.png" alt="Kitchen" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Kitchen &
                                            Dining
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item blur-up lazyloaded">
                                <a href="#" class="collection-grid-item__link">
                                    <img data-src="assetss/images/woodify/office.png"
                                        src="assetss/images/woodify/office.png" alt="Office"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Office &
                                            Workspace</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="#" class="collection-grid-item__link">
                                    <img data-src="assetss/images/woodify/games.jpg"
                                        src="assetss/images/woodify/games.jpg" alt="Toys & Games"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Toys & Games
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="#" class="collection-grid-item__link">
                                    <img data-src="assetss/images/woodify/gift.png" src="assetss/images/woodify/gift.png"
                                        alt="Shoes" class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Personalized
                                            Gifts
                                        </h3>
                                    </div>
                                </a>
                            </div>

                            <div class="collection-grid-item">
                                <a href="#" class="collection-grid-item__link">
                                    <img data-src="assetss/images/woodify/jewel.jpg"
                                        src="assetss/images/woodify/jewel.jpg" alt="Shoes" class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories
                                        </h3>
                                    </div>
                                </a>
                            </div> --}}

                        </div>
                    </div>
                </div>
                <!--End Collection Box slider-->




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
                                        <a href="#" class="article__grid-image">
                                            <img src="{{ !empty($post->photo) ? url('upload/post_images/' . $post->photo) : url('upload/no_image.png') }}"
                                                alt="{{ $post->title }}" title="{{ $post->title }}"
                                                class="blur-up lazyloaded" />
                                        </a>
                                        <div class="article__grid-meta article__grid-meta--has-image">
                                            <div class="wrap-blog-inner">
                                                <h2 class="h3 article__title">
                                                    <a href="#">{{ $post->title }}</a>
                                                </h2>
                                                <span
                                                    class="article__date">{{ $post->created_at->format('F d, Y') }}</span>
                                                <div class="rte article__grid-excerpt">
                                                    {{ Str::limit($post->content, 150, '...') }}
                                                </div>
                                                <ul class="list--inline article__meta-buttons">
                                                    <li><a href="{{ route('blog.show', ['id' => $post->id]) }}">Read more</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            {{-- <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="wrap-blog">
                                    <a href="#" class="article__grid-image">
                                        <img src="assetss/images/woodify/portfolio-1.jpg"
                                            alt="It's all about how you wear" title="It's all about how you wear"
                                            class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="#">Tips, Techniques, and Projects</a>
                                            </h2>
                                            <span class="article__date">February 20, 2024</span>
                                            <div class="rte article__grid-excerpt">
                                                Woodworking is more than just a craft; it's a tradition passed down through
                                                generations, a form of expression, and for many, a way of life. Whether
                                                you're carving a spoon, building furniture, or many items in woodify site. buy and look enjoy.
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="#">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="wrap-blog">
                                    <a href="#" class="article__grid-image">
                                        <img src="assetss/images/woodify/portfolio-2.jpg"
                                            alt="27 Days of Spring Fashion Recap" title="27 Days of Spring Fashion Recap"
                                            class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="#">Essential Tools for Every Woodworker</a>
                                            </h2>
                                            <span class="article__date">February 21, 2024</span>
                                            <div class="rte article__grid-excerpt">
                                                Grain direction significantly affects the outcome of your project. Working
                                                with the grain reduces the chances of tearing or splintering the wood,
                                                ensuring a smoother finish...
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="#">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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

            <!--Footer-->

            <!--End Footer-->
            <!--Scoll Top-->

            <!--End Scoll Top-->

            <!--Quick View popup-->
            <div class="modal fade quick-view-popup" id="content_quickview">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="ProductSection-product-template" class="product-template__container prstyle1">
                                <div class="product-single">
                                    <!-- Start model close -->
                                    <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right"
                                        title="close"><span class="icon icon anm anm-times-l"></span></a>
                                    <!-- End model close -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-details-img">
                                                <div class="pl-20">
                                                    <img src="assetss/images/product-detail-page/camelia-reversible-big1.jpg"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-single__meta">
                                                <h2 class="product-single__title">Product Quick View Popup</h2>
                                                <div class="prInfoRow">
                                                    <div class="product-stock"> <span class="instock ">In Stock</span>
                                                        <span class="outstock hide">Unavailable</span>
                                                    </div>
                                                    <div class="product-sku">SKU: <span
                                                            class="variant-sku">19115-rdxs</span></div>
                                                </div>
                                                <p class="product-single__price product-single__price-product-template">
                                                    <span class="visually-hidden">Regular price</span>
                                                    <s id="ComparePrice-product-template"><span
                                                            class="money">$600.00</span></s>
                                                    <span
                                                        class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                        <span id="ProductPrice-product-template"><span
                                                                class="money">$500.00</span></span>
                                                    </span>
                                                </p>
                                                <div class="product-single__description rte">
                                                    Belle Multipurpose Bootstrap 4 Html Template that will give you and your
                                                    customers a smooth shopping experience which can be used for various
                                                    kinds of stores such as fashion,...
                                                </div>

                                                <form method="post" action="http://annimexweb.com/cart/add"
                                                    id="product_form_10508262282" accept-charset="UTF-8"
                                                    class="product-form product-form-product-template hidedropdown"
                                                    enctype="multipart/form-data">
                                                    <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                                        <div class="product-form__item">
                                                            <label class="header">Color: <span
                                                                    class="slVariant">Red</span></label>
                                                            <div data-value="Red"
                                                                class="swatch-element color red available">
                                                                <input class="swatchInput" id="swatch-0-red"
                                                                    type="radio" name="option-0" value="Red">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-red"
                                                                    style="background-image:url(assetss/images/product-detail-page/variant1-1.jpg);"
                                                                    title="Red"></label>
                                                            </div>
                                                            <div data-value="Blue"
                                                                class="swatch-element color blue available">
                                                                <input class="swatchInput" id="swatch-0-blue"
                                                                    type="radio" name="option-0" value="Blue">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-blue"
                                                                    style="background-image:url(assetss/images/product-detail-page/variant1-2.jpg);"
                                                                    title="Blue"></label>
                                                            </div>
                                                            <div data-value="Green"
                                                                class="swatch-element color green available">
                                                                <input class="swatchInput" id="swatch-0-green"
                                                                    type="radio" name="option-0" value="Green">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-green"
                                                                    style="background-image:url(assetss/images/product-detail-page/variant1-3.jpg);"
                                                                    title="Green"></label>
                                                            </div>
                                                            <div data-value="Gray"
                                                                class="swatch-element color gray available">
                                                                <input class="swatchInput" id="swatch-0-gray"
                                                                    type="radio" name="option-0" value="Gray">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-gray"
                                                                    style="background-image:url(assetss/images/product-detail-page/variant1-4.jpg);"
                                                                    title="Gray"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                                        <div class="product-form__item">
                                                            <label class="header">Size: <span
                                                                    class="slVariant">XS</span></label>
                                                            <div data-value="XS" class="swatch-element xs available">
                                                                <input class="swatchInput" id="swatch-1-xs"
                                                                    type="radio" name="option-1" value="XS">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-xs" title="XS">XS</label>
                                                            </div>
                                                            <div data-value="S" class="swatch-element s available">
                                                                <input class="swatchInput" id="swatch-1-s" type="radio"
                                                                    name="option-1" value="S">
                                                                <label class="swatchLbl medium rectangle" for="swatch-1-s"
                                                                    title="S">S</label>
                                                            </div>
                                                            <div data-value="M" class="swatch-element m available">
                                                                <input class="swatchInput" id="swatch-1-m" type="radio"
                                                                    name="option-1" value="M">
                                                                <label class="swatchLbl medium rectangle" for="swatch-1-m"
                                                                    title="M">M</label>
                                                            </div>
                                                            <div data-value="L" class="swatch-element l available">
                                                                <input class="swatchInput" id="swatch-1-l" type="radio"
                                                                    name="option-1" value="L">
                                                                <label class="swatchLbl medium rectangle" for="swatch-1-l"
                                                                    title="L">L</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action -->
                                                    <div class="product-action clearfix">
                                                        <div class="product-form__item--quantity">
                                                            <div class="wrapQtyBtn">
                                                                <div class="qtyField">
                                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                            class="fa anm anm-minus-r"
                                                                            aria-hidden="true"></i></a>
                                                                    <input type="text" id="Quantity" name="quantity"
                                                                        value="1" class="product-form__input qty">
                                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                            class="fa anm anm-plus-r"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-form__item--submit">
                                                            <button type="button" name="add"
                                                                class="btn product-form__cart-submit">
                                                                <span>Add to cart</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Action -->
                                                </form>
                                                <div class="display-table shareRow">
                                                    <div class="display-table-cell">
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#"
                                                                title="Add to Wishlist"><i class="icon anm anm-heart-l"
                                                                    aria-hidden="true"></i> <span>Add to
                                                                    Wishlist</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End-product-single-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Quick View popup-->




        </div>
    </body>

    </html>
@endsection
