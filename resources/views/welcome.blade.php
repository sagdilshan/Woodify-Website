@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Woodify - Crafting Dreams into Wooden Reality')
@section('mainpage')



    <body class="template-index belle template-index-belle">

        <div class="pageWrapper">


            <!--Body Content-->
            <div id="page-content">
                <!--Home slider-->
                <div class="slideshow slideshow-wrapper pb-section sliderFull">
                    <div class="home-slideshow">
                        <div class="slide">
                            <div class="blur-up lazyload bg-size">
                                <img class="blur-up lazyload bg-img"
                                    data-src="assetss/images/slideshow-banners/belle-banner1.jpg"
                                    src="assetss/images/slideshow-banners/belle-banner1.jpg"
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
                                    data-src="assetss/images/slideshow-banners/belle-banner2.jpg"
                                    src="assetss/images/slideshow-banners/home9-banner1.jpg" alt="Summer Bikini Collection"
                                    title="Summer Bikini Collection" />
                                <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                    <div class="slideshow__text-content bottom">
                                        <div class="wrap-caption center">
                                            <h2 class="h1 mega-title slideshow__title">Summer Dress Collection</h2>
                                            <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend
                                                only</span>
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
                                    <h2 class="h2">New Arrivals</h2>
                                    <p>Browse the huge variety of our products</p>
                                </div>
                                <div class="tabs-listing">
                                    <ul class="tabs clearfix">
                                        <li class="active" rel="tab1">Women</li>
                                        <li rel="tab2">Men</li>
                                        <li rel="tab3">Sale</li>
                                    </ul>
                                    <div class="tab_container">
                                        <div id="tab1" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image1.jpg"
                                                                src="assetss/images/product-images/product-image1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image1-1.jpg"
                                                                src="assetss/images/product-images/product-image1-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span
                                                                    class="lbl on-sale">-16%</span> <span
                                                                    class="lbl pr-label1">new</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- countdown start -->
                                                        <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                                        <!-- countdown end -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Edna Dress</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="old-price">$500.00</span>
                                                            <span class="price">$600.00</span>
                                                        </div>
                                                        <!-- End product price -->

                                                        <div class="product-review">
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                            <i class="font-13 fa fa-star-o"></i>
                                                        </div>
                                                        <!-- Variant -->
                                                        <ul class="swatches">
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant1.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant2.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant4.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant5.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant6.jpg"
                                                                    alt="image" /></li>
                                                        </ul>
                                                        <!-- End Variant -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image2.jpg"
                                                                src="assetss/images/product-images/product-image2.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image2-1.jpg"
                                                                src="assetss/images/product-images/product-image2-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Elastic Waist Dress</a>
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
                                                        <!-- Variant -->
                                                        <ul class="swatches">
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant2-1.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant2-2.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant2-3.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant2-4.jpg"
                                                                    alt="image" /></li>
                                                        </ul>
                                                        <!-- End Variant -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image3.jpg"
                                                                src="assetss/images/product-images/product-image3.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image3-1.jpg"
                                                                src="assetss/images/product-images/product-image3-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span
                                                                    class="lbl pr-label2">Hot</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">3/4 Sleeve Kimono Dress</a>
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
                                                        <!-- Variant -->
                                                        <ul class="swatches">
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-1.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-2.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-3.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-4.jpg"
                                                                    alt="image" /></li>
                                                        </ul>
                                                        <!-- End Variant -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image4.jpg"
                                                                src="assetss/images/product-images/product-image4.jpg"
                                                                alt="image" title="product" />
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image4-1.jpg"
                                                                src="assetss/images/product-images/product-image4-1.jpg"
                                                                alt="image" title="product" />
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels"><span
                                                                    class="lbl on-sale">Sale</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Cape Dress</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="old-price">$900.00</span>
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
                                                        <!-- Variant -->
                                                        <ul class="swatches">
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant4-1.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant4-2.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant4-3.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant4-4.jpg"
                                                                    alt="image" /></li>
                                                        </ul>
                                                        <!-- End Variant -->
                                                    </div>
                                                    <!-- End product details -->
                                                </div>
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image5.jpg"
                                                                src="assetss/images/product-images/product-image5.jpg"
                                                                alt="image" title="product" />
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image5-1.jpg"
                                                                src="assetss/images/product-images/product-image5-1.jpg"
                                                                alt="image" title="product" />
                                                            <!-- End hover image -->
                                                            <!-- product label -->
                                                            <div class="product-labels"><span
                                                                    class="lbl on-sale">Sale</span></div>
                                                            <!-- End product label -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Paper Dress</a>
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
                                                        <!-- Variant -->
                                                        <ul class="swatches">
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-1.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-2.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-3.jpg"
                                                                    alt="image" /></li>
                                                            <li class="swatch medium rounded"><img
                                                                    src="assetss/images/product-images/variant3-4.jpg"
                                                                    alt="image" /></li>
                                                        </ul>
                                                        <!-- End Variant -->
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Zipper Jacket</a>
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Zipper Jacket</a>
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Workers Shirt Jacket</a>
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Watercolor Sport Jacket in
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
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image10.jpg"
                                                                src="assetss/images/product-images/product-image10.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image10-1.jpg"
                                                                src="assetss/images/product-images/product-image10-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Washed Wool Blazer</a>
                                                        </div>
                                                        <!-- End product name -->
                                                        <!-- product price -->
                                                        <div class="product-price">
                                                            <span class="price">$1,078.00</span>
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
                                        <div id="tab3" class="tab_content grid-products">
                                            <div class="productSlider">
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
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

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Azur Bracelet in Blue
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Bi-Goutte Earrings</a>
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Ashton Necklace</a>
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
                                                        <a href="short-description.html">
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
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Ara Ring</a>
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
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        <a href="short-description.html">
                                                            <!-- image -->
                                                            <img class="primary blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image15.jpg"
                                                                src="assetss/images/product-images/product-image15.jpg"
                                                                alt="image" title="product">
                                                            <!-- End image -->
                                                            <!-- Hover image -->
                                                            <img class="hover blur-up lazyload"
                                                                data-src="assetss/images/product-images/product-image15-1.jpg"
                                                                src="assetss/images/product-images/product-image15-1.jpg"
                                                                alt="image" title="product">
                                                            <!-- End hover image -->
                                                        </a>
                                                        <!-- end product image -->

                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
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
                                                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                                    <i class="icon anm anm-heart-l"></i>
                                                                </a>
                                                            </div>
                                                            <div class="compare-btn">
                                                                <a class="compare add-to-compare" href="compare.html"
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
                                                            <a href="short-description.html">Ara Ring</a>
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
                                                            <i class="font-13 fa fa-star"></i>
                                                            <i class="font-13 fa fa-star"></i>
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
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assetss/images/collection/shoes.jpg"
                                        src="assetss/images/collection/shoes.jpg" alt="Fashion"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Fashion</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img class="blur-up lazyload" data-src="assetss/images/collection/cosmetic.jpg"
                                        src="assetss/images/collection/cosmetic.jpg" alt="Cosmetic" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item blur-up lazyloaded">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assetss/images/collection/bag.jpg"
                                        src="assetss/images/collection/bag.jpg" alt="Bag"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Bag</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assetss/images/collection/accessories.jpg"
                                        src="assetss/images/collection/accessories.jpg" alt="Accessories"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Accessories
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assetss/images/collection/shoes.jpg"
                                        src="assetss/images/collection/shoes.jpg" alt="Shoes"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assetss/images/collection/jewellry.jpg"
                                        src="assetss/images/collection/jewellry.jpg" alt="Jewellry"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Jewellry</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Collection Box slider-->

                <!--Logo Slider-->
                <div class="section logo-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="logo-bar">
                                    <div class="logo-bar__item">
                                        <img src="assetss/images/logo/brandlogo1.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assetss/images/logo/brandlogo2.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assetss/images/logo/brandlogo3.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assetss/images/logo/brandlogo4.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assetss/images/logo/brandlogo5.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assetss/images/logo/brandlogo6.png" alt="" title="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Logo Slider-->

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
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image1.jpg"
                                                src="assetss/images/product-images/product-image1.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image1-1.jpg"
                                                src="assetss/images/product-images/product-image1-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span>
                                                <span class="lbl pr-label1">new</span>
                                            </div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Edna Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$500.00</span>
                                                <span class="price">$600.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant1.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant2.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant4.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant5.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant6.jpg" alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image2.jpg"
                                                src="assetss/images/product-images/product-image2.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image2-1.jpg"
                                                src="assetss/images/product-images/product-image2-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span> <span
                                                    class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Elastic Waist Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$748.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant2-1.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant2-2.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant2-3.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant2-4.jpg" alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image3.jpg"
                                                src="assetss/images/product-images/product-image3.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image3-1.jpg"
                                                src="assetss/images/product-images/product-image3-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span> <span
                                                    class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">3/4 Sleeve Kimono Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-1.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-2.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-3.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-4.jpg" alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image4.jpg"
                                                src="assetss/images/product-images/product-image4.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image4-1.jpg"
                                                src="assetss/images/product-images/product-image4-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Cape Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$900.00</span>
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant4-1.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant4-2.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant4-3.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant4-4.jpg" alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image5.jpg"
                                                src="assetss/images/product-images/product-image5.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image5-1.jpg"
                                                src="assetss/images/product-images/product-image5-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Paper Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$900.00</span>
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-1.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-2.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-3.jpg" alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assetss/images/product-images/variant3-4.jpg" alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image16.jpg"
                                                src="assetss/images/product-images/product-image16.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assetss/images/product-images/product-image16-1.jpg"
                                                src="assetss/images/product-images/product-image16-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Buttercup Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$420.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
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
                                    <h2 class="h2">Latest From our Blog</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="wrap-blog">
                                    <a href="blog-left-sidebar.html" class="article__grid-image">
                                        <img src="assetss/images/blog/post-img1.jpg" alt="It's all about how you wear"
                                            title="It's all about how you wear" class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="blog-left-sidebar.html">It's all about how you wear</a>
                                            </h2>
                                            <span class="article__date">May 02, 2017</span>
                                            <div class="rte article__grid-excerpt">
                                                I must explain to you how all this mistaken idea of denouncing pleasure and
                                                praising pain was born and I will give you a complete account...
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="blog-article.html">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="wrap-blog">
                                    <a href="blog-left-sidebar.html" class="article__grid-image">
                                        <img src="assetss/images/blog/post-img2.jpg"
                                            alt="27 Days of Spring Fashion Recap"
                                            title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                            </h2>
                                            <span class="article__date">May 02, 2017</span>
                                            <div class="rte article__grid-excerpt">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="blog-article.html">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                    <a href="javascript:void()" data-dismiss="modal"
                                        class="model-close-btn pull-right" title="close"><span
                                            class="icon icon anm anm-times-l"></span></a>
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
                                                                <input class="swatchInput" id="swatch-1-s"
                                                                    type="radio" name="option-1" value="S">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-s" title="S">S</label>
                                                            </div>
                                                            <div data-value="M" class="swatch-element m available">
                                                                <input class="swatchInput" id="swatch-1-m"
                                                                    type="radio" name="option-1" value="M">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-m" title="M">M</label>
                                                            </div>
                                                            <div data-value="L" class="swatch-element l available">
                                                                <input class="swatchInput" id="swatch-1-l"
                                                                    type="radio" name="option-1" value="L">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-l" title="L">L</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action -->
                                                    <div class="product-action clearfix">
                                                        <div class="product-form__item--quantity">
                                                            <div class="wrapQtyBtn">
                                                                <div class="qtyField">
                                                                    <a class="qtyBtn minus"
                                                                        href="javascript:void(0);"><i
                                                                            class="fa anm anm-minus-r"
                                                                            aria-hidden="true"></i></a>
                                                                    <input type="text" id="Quantity"
                                                                        name="quantity" value="1"
                                                                        class="product-form__input qty">
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
