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
                            <h1 class="collection-hero__title page-width">About Us</h1>
                        </div>
                    </div>
                </div>
                <!--End Collection  Banner-->
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
