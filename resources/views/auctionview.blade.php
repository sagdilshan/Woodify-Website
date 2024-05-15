@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Auction Product View')
@section('mainpage')

    <head>

        <link rel="shortcut icon" href="../../assetss/images/woodify-fav.png" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="../assetss/css/plugins.css">
        <!-- Bootstap CSS -->
        <link rel="stylesheet" href="../assetss/css/bootstrap.min.css">
        <!-- Main Style C SS -->
        <link rel="stylesheet" href="../assetss/css/style.css">
        <link rel="stylesheet" href="../assetss/css/responsive.css">
    </head>

    <body class="template-product template-product-right-thumb belle">
        <div class="pageWrapper">
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
                            <a href="{{ url('/') }}" title="Back to the home page">Home</a><span
                                aria-hidden="true">›</span><span>Auction Product View</span>
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
                                                    data-zoom-image="{{ !empty($auctionview->thumb_1) ? url('upload/thumb_images/' . $auctionview->thumb_1) : url('upload/no_product.png') }}"
                                                    class="product-image" alt="{{ $auctionview->name }}"
                                                    src="{{ !empty($auctionview->thumb_1) ? url('upload/thumb_images/' . $auctionview->thumb_1) : url('upload/no_product.png') }}"
                                                    class="product-image" alt="{{ $auctionview->name }}" />
                                            </div>

                                        </div>
                                        <div class="lightboximages">
                                            @php
                                                // Decode the JSON string to get an array of image paths
                                                $imagePaths = json_decode($auctionview->images);
                                            @endphp

                                            @if (!empty($imagePaths))
                                                @foreach ($imagePaths as $path)
                                                    <a href="{{ asset($path) }}" data-size="1462x2048"></a>
                                                @endforeach
                                            @endif



                                        </div>
                                        <div class="product-thumb">
                                            <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                                @php
                                                    // Decode the JSON string to get an array of image paths
                                                    $imagePaths = json_decode($auctionview->images);
                                                @endphp

                                                @if (!empty($imagePaths))
                                                    @foreach ($imagePaths as $path)
                                                        <a data-image="{{ asset($path) }}"
                                                            data-zoom-image="{{ asset($path) }}"
                                                            class="slick-slide slick-cloned" data-slick-index="-4"
                                                            aria-hidden="true" tabindex="-1">
                                                            <img class="blur-up lazyload" src="{{ asset($path) }}"
                                                                alt="Product Image" />
                                                        </a>
                                                    @endforeach
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title">{{ $auctionview->p_name }}</h1>

                                        <div class="prInfoRow">
                                            <div class="product-stock "> <span class="instock">Auction Started</span> <span
                                                    class="outstock hide">Unavailable</span> </div>
                                            <br><span class="instock text-danger">End Date -
                                                {{ $auctionview->end_date }}</span>
                                        </div>
                                        <div class="prInfoRow">
                                            <div class="product-stock" style="display: none"> <span
                                                    class="instock ">{{ $auctionview->created_by }}</span> </div>

                                        </div>

                                    </div>
                                    <p class="  product-single__price-product-template">
                                    <div class="product-price">


                                        <span class="old-price">Start Price: $
                                            {{ $auctionview->start_price }}</span><br>

                                        <span id="ProductPrice-product-template" class="money"
                                            style="font-size: 1rem; font-weight: bold">Max BID Price:<span
                                                class="text-danger"> $ {{ $maxBidPrice }}</span></span>
                                    </div>
                                    </p>
                                    <br>
                                    <div class="product-single__description rte">
                                        <p style="font-size: 1rem;">{!! nl2br(e($auctionview->description)) !!}</p>
                                    </div><br>
                                    <form method="post" action="{{ route('auction.add') }}" accept-charset="UTF-8"
                                        class="product-form product-form-product-template hidedropdown">
                                        @csrf
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity" style="display: none;">
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
                                            <input type="hidden" name="auction_product_id" value="{{ $auctionview->id }}">
                                            <input type="hidden" name="auction_product_name"
                                                value="{{ $auctionview->p_name }}">
                                            <input type="hidden" name="thumb_1" value="{{ $auctionview->thumb_1 }}">
                                            <input type="hidden" name="start_price"
                                                value="{{ $auctionview->start_price }}">
                                            <input type="hidden" name="seller_id"
                                                value="{{ $auctionview->created_by }}">
                                            <input type="text" name="customer_price" id="customer_price"
                                                placeholder="Enter your bid price" onchange="checkBidPrice()" required>
                                            <div id="price_error" style="color: red;"></div><br>
                                            <div class="product-form__item--submit">
                                                <button type="submit" name="add" id="submit_button"
                                                    class="btn product-form__cart-submit" disabled>
                                                    <span id="AddToCartText-product-template">My BID Price Add</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- End Product Auction -->

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
                                        <h3>Worldwide Delivery</h3>FAST &amp; shipping to over 200+ countries &amp;
                                        regions.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-3 feature">
                                    <img src="../assetss/images/phone-call.png" alt="Hotline" title="Hotline" />
                                    <div class="details">
                                        <h3>Hotline</h3>Talk to help line for your question on (+94) 77 991 9634
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Product Fearure-->
                        <!--Product Tabs-->
                        <div class="tabs-listing">
                            <ul class="product-tabs">
                                <li rel="tab1"><a class="tablink">Auction &amp; Policy</a></li>
                                <li rel="tab2"><a class="tablink">Shipping &amp; Returns</a></li>
                            </ul>
                            <div class="tab-container">

                                <div id="tab1" class="tab-content">
                                    <h4>Auction Policy</h4>
                                    <p>Welcome to <strong>Woodify</strong> Auctions! We're excited to offer you
                                        the opportunity to bid on unique items and experiences. Here's everything you need
                                        to know about our auction process:</p>

                                    <p><strong>Auction Duration:</strong> Each auction listing will specify the start and
                                        end date. Bidding will remain open until the specified end time, and any bids placed
                                        after this time will not be considered.</p>

                                    <p><strong>Bidding Rules:</strong></p>
                                    <ul>
                                        <li>Bids must be placed in increments specified by the auction listing.</li>
                                        <li>The highest bid at the end of the auction wins the item.</li>
                                        <li>In case of a tie bid, the bid placed first will be considered the winning bid.
                                        </li>
                                    </ul>

                                    <p><strong>Winning Bids:</strong></p>
                                    <ul>
                                        <li>The winner of the auction will be notified via email within 24 hours of the
                                            auction's end.</li>
                                        <li>The winning bid amount will be charged to the winning bidder's payment method.
                                        </li>
                                        <li>The winning bidder will have 48 hours to complete the
                                            purchase by making the payment.</li>
                                        <li>Failure to complete the purchase within the specified time frame may result in
                                            forfeiture of the item and potential suspension from future auctions.</li>
                                    </ul>

                                    <p><strong>Seller Interaction:</strong></p>
                                    <ul>
                                        <li>Sellers have the option to set a reserve price for their items. If the reserve
                                            price is not met by the end of the auction, the item will not be sold.</li>
                                        <li>Sellers may also choose to set a "Buy It Now" price, allowing buyers to purchase
                                            the item immediately at a specified price.</li>
                                    </ul>

                                    <p><strong>Adding Items to Cart:</strong></p>
                                    <ul>
                                        <li>Once the auction ends, the winning bid amount will be automatically added to the
                                            highest bidder's cart.</li>
                                        <li>The bidder can then proceed to checkout to complete the purchase.</li>
                                    </ul>

                                    <p>Thank you for participating in our auctions! If you have any questions or concerns,
                                        please don't hesitate to contact our customer support team.</p>

                                </div>
                                <div id="tab2" class="tab-content">
                                    <h4>Returns Policy</h4>
                                    <p>Orders typically ship within 2-4 weeks. Shipping rates are calculated at
                                        checkout, and domestic delivery usually takes 4-5 weeks.</p>
                                    <p>We do not offer
                                        international shipping at this time. Tracking information is provided upon shipment,
                                        and any damages should be reported within 48 hours.</p>
                                    <p>For further inquiries, please
                                        contact us via email.</p>
                                </div>
                            </div>
                        </div>
                        <!--End Product Tabs-->


                        <!--Recently Product Slider-->
                        <div class="related-product grid-products">
                            <header class="section-header">
                                <h2 class="section-header__title text-center h2"><span>Mostly Viewed Auction</span>
                                </h2>
                                <p class="sub-heading">You can manage this section from store admin as describe in
                                    above
                                    section</p>
                            </header>
                            <div class="productPageSlider">
                                @foreach ($auctionviewss as $product)
                                    <div class="col-lg-12 item">
                                        <!-- start product image -->

                                        <div class="product-image">

                                            <!-- start product image -->
                                            <a href="{{ route('auction.view', ['id' => $product->id]) }}">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"
                                                    data-src="{{ !empty($product->thumb_1) ? url('upload/thumb_images/' . $product->thumb_1) : url('upload/no_product.png') }}"
                                                    src="{{ !empty($product->thumb_1) ? url('upload/thumb_images/' . $product->thumb_1) : url('upload/no_product.png') }}"
                                                    alt="{{ $product->name }}" title="{{ $product->name }}">
                                                <!-- End image -->
                                                <!-- Hover image -->
                                                <img class="hover blur-up lazyload"
                                                    data-src="{{ !empty($product->thumb_2) ? url('upload/thumb_images/' . $product->thumb_2) : url('upload/no_product.png') }}"
                                                    src="{{ !empty($product->thumb_2) ? url('upload/thumb_images/' . $product->thumb_2) : url('upload/no_product.png') }}"
                                                    alt="{{ $product->name }}" title="{{ $product->name }}">
                                                <!-- End hover image -->
                                                <!-- product label -->

                                                <!-- End product label -->
                                            </a>
                                            <!-- end product image -->

                                        </div>
                                        <!-- end product image -->

                                        <!--start product details -->
                                        <div class="product-details text-center">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="#">{{ $product->p_name }}</a>
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

            <script>
                function checkBidPrice() {
                    var startPrice = parseFloat({{ $auctionview->customer_price }});
                    var customerPrice = parseFloat(document.getElementById("customer_price").value);

                    if (isNaN(customerPrice)) {
                        document.getElementById("price_error").innerText = "Please enter a valid number.";
                        document.getElementById("submit_button").disabled = true;
                        return;
                    }

                    var maxBidPrice = parseFloat({{ $maxBidPrice }}); // Fetching the maximum bid price for the auction

                    if (customerPrice <= startPrice || customerPrice <= maxBidPrice) {
                        document.getElementById("price_error").innerText =
                            "Bid price must be greater than start price and the current highest bid.";
                        document.getElementById("submit_button").disabled = true;
                    } else {
                        document.getElementById("price_error").innerText = "";
                        document.getElementById("submit_button").disabled = false;
                    }
                }
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
