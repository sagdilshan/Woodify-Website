@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Blog Article')
@section('mainpage')
<head>

    <!-- Favicon -->
    <!-- Plugins CSS -->
    <link rel="shortcut icon" href="../assetss/images/woodify-fav.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="../assetss/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="../assetss/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="../assetss/css/style.css">
    <link rel="stylesheet" href="../assetss/css/responsive.css">
    </head>
    <body class="template-blog belle">
        <div class="pageWrapper">
            <br><br><br>
            <div id="page-content">
                <!--Page Title-->
                <div class="page section-header text-center mb-0">
                    <div class="page-title">
                        <div class="wrapper">
                            <h1 class="page-width">Blog Article</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->
                <div class="bredcrumbWrap">
                    <div class="container breadcrumbs">
                        <a href="{{ url('/') }}" title="Back to the home page">Home</a><span aria-hidden="true">›</span>
                        <span>Blog Article</span>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!--Main Content-->
                        {{-- <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                            <div class="blog--list-view">
                                <div class="article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload"
                                            data-src="../assetss/images/blog/blog-post-1.jpg"
                                            src="../assetss/images/blog/blog-post-1.jpg" alt="It's all about how you wear"></a>
                                    <h1><a href="blog-left-sidebar.html">It's all about how you wear</a></h1>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> Admin</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="2017-05-02">May 02,
                                                2017</time></li>
                                        <li>
                                            <ul class="inline-list">
                                                <li><i class="icon anm anm-comments-l"></i> <a href="#"> 0
                                                        comments</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="rte">
                                        <p>On sait depuis longtemps que travailler avec du texte lisible et contenant du
                                            senout cas comparable avec celle du français standard. De
                                            nombreuses suites logicielles de.</p>

                                        <h3>Sample Text Listing</h3>

                                        <h3>Donec maximus quam at lectus bibendum, non suscipit nunc tristique.</h3>
                                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
                                            </p>
                                    </div>
                                    <hr />

                                    <div class="blog-nav">
                                        <div class="text-left">
                                            <i class="icon icon-arrow-circle-left"></i>
                                            <a href="#" title="">Previous</a>
                                        </div>
                                        <div class="text-right">
                                            <a href="#" title="">Next</a>
                                            <i class="icon icon-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}

                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                            <div class="blog--list-view">
                                <div class="article">
                                    <!-- Article Image -->
                                    <a class="article_featured-image" href="#"><img class="blur-up lazyload"
                                            data-src="{{ !empty($post->photo) ? url('upload/post_images/' . $post->photo) : url('upload/no_image.png') }}"
                                            src="{{ !empty($post->photo) ? url('upload/post_images/' . $post->photo) : url('upload/no_image.png') }}" alt="{{ $post->title }}"></a>
                                    <h1><a href="#">{{ $post->title }}</a></h1>
                                    <ul class="publish-detail">
                                        <li><i class="anm anm-user-al" aria-hidden="true"></i> Admin</li>
                                        <li><i class="icon anm anm-clock-r"></i> <time datetime="{{ $post->created_at }}">{{ $post->created_at->format('F d, Y') }}</time></li>
                                        <!-- Add comments count if available -->
                                    </ul>
                                    <div class="rte">
                                        {!! $post->content !!}
                                    </div>
                                    <hr />

                                    <!-- Blog Navigation -->
                                    <!-- Add navigation to previous and next blog posts if needed -->
                                </div>
                            </div>
                        </div>
                        <!--End Main Content-->
                        <!--Sidebar-->
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar">
                            <div class="sidebar_tags">

                                <div class="sidebar_widget">
                                    <div class="widget-title">
                                        <h2>Other Posts</h2>
                                    </div>
                                    <div class="widget-content">
                                        <div class="list list-sidebar-products">
                                            {{-- <div class="grid">

                                                <div class="grid__item">
                                                    <div class="mini-list-item">
                                                        <div class="mini-view_image"> <a class="grid-view-item__link"
                                                                href="#"><img
                                                                    class="grid-view-item__image blur-up lazyload"
                                                                    data-src="../assetss/images/blog/blog-post-sml-3.jpg"
                                                                    src="../assetss/images/blog/blog-post-sml-3.jpg"
                                                                    alt="" /></a> </div>
                                                        <div class="details"> <a class="grid-view-item__title"
                                                                href="#">How to Wear The Folds Trend Four Ways</a>
                                                            <div class="grid-view-item__meta"><span class="article__date">
                                                                    <time datetime="2017-05-02T14:14:00Z">May 02,
                                                                        2017</time> </span></div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> --}}

                                            <div class="grid">
                                                @foreach ($postss as $post)
                                                    <div class="grid__item">
                                                        <div class="mini-list-item">
                                                            <div class="mini-view_image">
                                                                <a class="grid-view-item__link" href="{{ route('blog.show', ['id' => $post->id]) }}">
                                                                    <img class="grid-view-item__image blur-up lazyload"
                                                                        data-src="{{ !empty($post->photo) ? url('upload/post_images/' . $post->photo) : url('upload/no_image.png') }}"
                                                                        src="{{ !empty($post->photo) ? url('upload/post_images/' . $post->photo) : url('upload/no_image.png') }}"
                                                                        alt="{{ $post->title }}" />
                                                                </a>
                                                            </div>
                                                            <div class="details">
                                                                <a class="grid-view-item__title" href="{{ route('blog.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                                                <div class="grid-view-item__meta">
                                                                    <span class="article__date">
                                                                        <time datetime="{{ $post->created_at }}">{{ $post->created_at->format('F d, Y') }}</time>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!--End Sidebar-->
                    </div>
                </div>

            </div>
        </div>
    </body>
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

@endsection
