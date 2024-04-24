@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Product View')
@section('mainpage')

    <head>

        {{-- <link rel="shortcut icon" href="../../assetss/images/woodify-fav.png" /> --}}
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="../assetss/css/plugins.css">
        <!-- Bootstap CSS -->
        <link rel="stylesheet" href="../assetss/css/bootstrap.min.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="../assetss/css/style.css">
        <link rel="stylesheet" href="../assetss/css/responsive.css">
    </head>

    <body class="template-product template-product-right-thumb belle">
        <div class="pageWrapper">
            <br>
            <br>
            <br>
            <br>
            <!--Body Content-->
            <div id="page-content">
                <!--MainContent-->
                <div id="MainContent" class="main-content" role="main">
                    <!--Breadcrumb-->
                    <div class="bredcrumbWrap">
                        <div class="container breadcrumbs">
                            <a href="index.html" title="Back to the home page">Home</a><span
                                aria-hidden="true">›</span><span>Product Shipping Message</span>
                        </div>
                    </div>
                    <!--End Breadcrumb-->

                    <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                        <!--product-single-->
                        <div class="product-single">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-details-img">
                                        <div class="zoompro-wrap product-zoom-right pl-20">
                                            <div class="zoompro-span">


                                                <img class="blur-up lazyload zoompro"
                                                    data-zoom-image="{{ !empty($productview->thumb1) ? url('upload/thumb_images/' . $productview->thumb1) : url('upload/no_product.png') }}"
                                                    class="product-image" alt="{{ $productview->name }}"
                                                    src="{{ !empty($productview->thumb1) ? url('upload/thumb_images/' . $productview->thumb1) : url('upload/no_product.png') }}"
                                                    class="product-image" alt="{{ $productview->name }}" />
                                            </div>

                                        </div>
                                        <div class="lightboximages">
                                            @php
                                                // Decode the JSON string to get an array of image paths
                                                $imagePaths = json_decode($productview->images);
                                            @endphp

                                            @if (!empty($imagePaths))
                                                @foreach ($imagePaths as $path)
                                                    <a href="{{ asset($path) }}" data-size="1462x2048"></a>
                                                @endforeach
                                            @endif



                                        </div>
                                        <div class="product-thumb">
                                            <div id="gallery" class="">
                                                @php
                                                    // Decode the JSON string to get an array of image paths
                                                    $imagePaths = json_decode($productview->images);
                                                @endphp

                                                @if (!empty($imagePaths))
                                                    @foreach ($imagePaths as $path)
                                                        <div class="product-dec-slider-2 product-tab-left">
                                                            <a data-image="{{ asset($path) }}"
                                                                data-zoom-image="{{ asset($path) }}"
                                                                class="slick-slide slick-cloned" data-slick-index="-4"
                                                                aria-hidden="true" tabindex="-1">
                                                                <img class="blur-up lazyload" src="{{ asset($path) }}"
                                                                    alt="Product Image" />
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title">{{ $productview->name }}</h1>

                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock ">In Stock</span> <span
                                                    class="outstock hide">Unavailable</span> </div>

                                        </div>

                                    </div>
                                    <p class="  product-single__price-product-template">
                                    <div class="product-price">
                                        <span class="old-price">Regular Price: $
                                            {{ $productview->price }}</span><br>
                                        <span id="ProductPrice-product-template" class="money"
                                            style="font-size: 1rem; font-weight: bold">Sale Price: $
                                            {{ $productview->sale_price }}</span>
                                    </div>
                                    </p>
                                    <br>
                                    <div class="product-single__description rte">
                                        <p style="font-size: 1rem;">{{ $productview->description }}</p>
                                    </div><br>
                                    <form method="post" action="#" accept-charset="UTF-8"
                                        class="product-form product-form-product-template hidedropdown"
                                        enctype="multipart/form-data">



                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1"
                                                            class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span id="AddToCartText-product-template">Add to Cart</span>
                                                </button>
                                            </div>
                                            <div class="shopify-payment-button" data-shopify="payment-button">
                                                <button type="button"
                                                    class="shopify-payment-button__button shopify-payment-button__button--unbranded">Buy
                                                    it now</button>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--End-product-single-->
                        <!--Product Fearure-->
                        <div class="prFeatures">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="../assetss/images/credit-card.png" alt="Safe Payment"
                                        title="Safe Payment" />
                                    <div class="details">
                                        <h3>Safe Payment</h3>Pay with the world's most payment methods.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="../assetss/images/shield.png" alt="Confidence" title="Confidence" />
                                    <div class="details">
                                        <h3>Confidence</h3>Protection covers your purchase and personal data.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="../assetss/images/worldwide.png" alt="Worldwide Delivery"
                                        title="Worldwide Delivery" />
                                    <div class="details">
                                        <h3>Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp;
                                        regions.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="../assetss/images/phone-call.png" alt="Hotline" title="Hotline" />
                                    <div class="details">
                                        <h3>Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666
                                        888
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Fearure-->
                        <!--Product Tabs-->
                        <div class="tabs-listing">
                            <ul class="product-tabs">
                                <li rel="tab2"><a class="tablink">Shipping &amp; Returns</a></li>
                            </ul>
                            <div class="tab-container">


                                <div id="tab2" class="tab-content">
                                    <h4>Returns Policy</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo,
                                        accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio
                                        lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo
                                        a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut
                                        vehicula leo efficitur at.</p>
                                    <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc
                                        enim, sit amet pharetra erat aliquet ac.</p>
                                    <h4>Shipping</h4>
                                    <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis
                                        pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus
                                        varius. Duis vel scelerisque elit, et vestibulum metus. Integer sit amet
                                        tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut
                                        efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius.
                                        Quisque a interdum augue. Nam ut nibh mauris.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Product Tabs-->


                        <!--Recently Product Slider-->
                        <div class="related-product grid-products">
                            <header class="section-header">
                                <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span>
                                </h2>
                                <p class="sub-heading">You can manage this section from store admin as describe in
                                    above
                                    section</p>
                            </header>
                            <div class="productPageSlider">
                                @foreach ($productss as $product)
                                <div class="col-12 item">
                                    <!-- start product image -->

                                    <div class="product-image">

                                            <!-- start product image -->
                                            <a href="{{ route('product.view', ['id' => $product->id]) }}">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                    src="{{ !empty($product->thumb1) ? url('upload/thumb_images/' . $product->thumb1) : url('upload/no_product.png') }}"
                                                    alt="{{ $product->name }}" title="{{ $product->name }}">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                    src="{{ !empty($product->thumb2) ? url('upload/thumb_images/' . $product->thumb2) : url('upload/no_product.png') }}"
                                                    alt="{{ $product->name }}" title="{{ $product->name }}">
                                                <!-- End hover image -->
                                                <!-- product label -->
                                                <div class="product-labels rectangular">
                                                    <span class="lbl pr-label1">new</span>
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
                                            <a href="#">{{ $product->name }}</a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>

                                @endforeach

                            </div>
                        </div>
                        <!--End Recently Product Slider-->
                    </div>
                    <!--#ProductSection-product-template-->
                </div>
                <!--MainContent-->
            </div>
            <!--End Body Content-->



            <div class="hide">
                <div id="sizechart">
                    <h3>WOMEN'S BODY SIZING CHART</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>XS</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td>31" - 33"</td>
                                <td>33" - 35"</td>
                                <td>35" - 37"</td>
                                <td>37" - 39"</td>
                                <td>39" - 42"</td>
                            </tr>
                            <tr>
                                <td>Waist</td>
                                <td>24" - 26"</td>
                                <td>26" - 28"</td>
                                <td>28" - 30"</td>
                                <td>30" - 32"</td>
                                <td>32" - 35"</td>
                            </tr>
                            <tr>
                                <td>Hip</td>
                                <td>34" - 36"</td>
                                <td>36" - 38"</td>
                                <td>38" - 40"</td>
                                <td>40" - 42"</td>
                                <td>42" - 44"</td>
                            </tr>
                            <tr>
                                <td>Regular inseam</td>
                                <td>30"</td>
                                <td>30½"</td>
                                <td>31"</td>
                                <td>31½"</td>
                                <td>32"</td>
                            </tr>
                            <tr>
                                <td>Long (Tall) Inseam</td>
                                <td>31½"</td>
                                <td>32"</td>
                                <td>32½"</td>
                                <td>33"</td>
                                <td>33½"</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3>MEN'S BODY SIZING CHART</h3>
                    <table>
                        <tbody>
                            <tr>
                                <th>Size</th>
                                <th>XS</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>XXL</th>
                            </tr>
                            <tr>
                                <td>Chest</td>
                                <td>33" - 36"</td>
                                <td>36" - 39"</td>
                                <td>39" - 41"</td>
                                <td>41" - 43"</td>
                                <td>43" - 46"</td>
                                <td>46" - 49"</td>
                            </tr>
                            <tr>
                                <td>Waist</td>
                                <td>27" - 30"</td>
                                <td>30" - 33"</td>
                                <td>33" - 35"</td>
                                <td>36" - 38"</td>
                                <td>38" - 42"</td>
                                <td>42" - 45"</td>
                            </tr>
                            <tr>
                                <td>Hip</td>
                                <td>33" - 36"</td>
                                <td>36" - 39"</td>
                                <td>39" - 41"</td>
                                <td>41" - 43"</td>
                                <td>43" - 46"</td>
                                <td>46" - 49"</td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding-left: 30px;"><img src="../assetss/images/size.jpg" alt=""></div>
                </div>
            </div>
            <div class="hide">
                <div id="productInquiry">
                    <div class="contact-form form-vertical">
                        <div class="page-title">
                            <h3>Camelia Reversible Jacket</h3>
                        </div>
                        <form method="post" action="#" id="contact_form" class="contact-form">
                            <input type="hidden" name="form_type" value="contact" />
                            <input type="hidden" name="utf8" value="✓" />
                            <div class="formFeilds">
                                <input type="hidden" name="contact[product name]" value="Camelia Reversible Jacket">
                                <input type="hidden" name="contact[product link]"
                                    value="/products/camelia-reversible-jacket-black-red">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="text" id="ContactFormName" name="contact[name]"
                                            placeholder="Name" value="" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input type="email" id="ContactFormEmail" name="contact[email]"
                                            placeholder="Email" autocapitalize="off" value="" required>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <input required type="tel" id="ContactFormPhone" name="contact[phone]"
                                            pattern="[0-9\-]*" placeholder="Phone Number" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <textarea required rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" class="btn" value="Send Message">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <script>
                $(function() {
                    var $pswp = $('.pswp')[0],
                        image = [],
                        getItems = function() {
                            var items = [];
                            $('.lightboximages a').each(function() {
                                var $href = $(this).attr('href'),
                                    $size = $(this).data('size').split('x'),
                                    item = {
                                        src: $href,
                                        w: $size[0],
                                        h: $size[1]
                                    }
                                items.push(item);
                            });
                            return items;
                        }
                    var items = getItems();

                    $.each(items, function(index, value) {
                        image[index] = new Image();
                        image[index].src = value['src'];
                    });
                    $('.prlightbox').on('click', function(event) {
                        event.preventDefault();

                        var $index = $(".active-thumb").parent().attr('data-slick-index');
                        $index++;
                        $index = $index - 1;

                        var options = {
                            index: $index,
                            bgOpacity: 0.9,
                            showHideOpacity: true
                        }
                        var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                        lightBox.init();
                    });
                });
            </script>


        </div>
        </div>

        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>

        <!-- Including Jquery -->
        <script src="../assetss/js/vendor/jquery-3.3.1.min.js"></script>
        <script src="../assetss/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="../assetss/js/vendor/jquery.cookie.js"></script>
        <script src="../assetss/js/vendor/wow.min.js"></script>
        <!-- Including Javascript -->
        <script src="../assetss/js/bootstrap.min.js"></script>
        <script src="../assetss/js/plugins.js"></script>
        <script src="../assetss/js/popper.min.js"></script>
        <script src="../assetss/js/lazysizes.js"></script>
        <script src="../assetss/js/main.js"></script>

        <!-- Photoswipe Gallery -->
        <script src="../assetss/js/vendor/photoswipe.min.js"></script>
        <script src="../assetss/js/vendor/photoswipe-ui-default.min.js"></script>
    </body>


@endsection
