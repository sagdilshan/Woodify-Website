@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Contact Us')
@section('mainpage')


<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
    <body class="template-collection belle">
        <div class="pageWrapper">

            <br><br><br>

            <!--Body Content-->
            <div id="page-content">
                <!--Page Title-->
                <div class="page section-header text-center">
                    <div class="page-title">
                        <div class="wrapper">
                            <h1 class="page-width">Contact Us</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->


                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                            <h2>Drop Us A Message</h2>
                            <p>Do you have any woodify system problem... Contact Our Admins</p>
                            <div class="formFeilds contact-form form-vertical">
                                <form action="{{route('store.contact')}}" method="POST" id="contact_form" class="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name"
                                                    placeholder="Enter Your Name" value="{{ Auth::check() ? Auth::user()->name : '' }}" required="">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" id="email" name="email"
                                                    placeholder="Enter Your Email" value="{{ Auth::check() ? Auth::user()->email : '' }}" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input required="" type="tel" id="phone" name="phone"
                                                    pattern="[0-9\-]*" placeholder="Enter Your Phone Number" value="{{ Auth::check() ? Auth::user()->phone : '' }}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <input required="" type="text" id="subject" name="subject"
                                                    placeholder="Enter Subject" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <textarea required="" rows="10" id="message" name="message" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="submit" class="btn" value="Send Message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="open-hours">
                                <strong>24 Hours Help for us</strong><br>

                            </div>
                            <hr />
                            <ul class="addressFooter" style="list-style: none;">
                                <li class="phone">
                                    <p>(+94) 77 991 9634</p>
                                </li>
                                <li class="email"></i>
                                    <p>contact@woodify.com</p>
                                </li>
                            </ul>
                            <hr />
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Woodify System on Facebook"><i class="icon icon-facebook"></i></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Woodify System on Twitter"><i class="icon icon-twitter"></i> <span
                                            class="icon__fallback-text">Twitter</span></a></li>
                                <li><a class="social-icons__link" href="#" target="_blank"
                                        title="Woodify System on Instagram"><i class="icon icon-instagram"></i> <span
                                            class="icon__fallback-text">Instagram</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!--End Body Content-->



            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <!-- JavaScript to handle Load More button -->
            <script>
                @if (Session::has('message'))
                    var type = "{{ Session::get('alert-type', 'info') }}"
                    switch (type) {
                        case 'info':
                            toastr.info(" {{ Session::get('message') }} ");
                            break;

                        case 'success':
                            toastr.success(" {{ Session::get('message') }} ");
                            break;

                        case 'warning':
                            toastr.warning(" {{ Session::get('message') }} ");
                            break;

                        case 'error':
                            toastr.error(" {{ Session::get('message') }} ");
                            break;
                    }
                @endif
            </script>
    </body>


@endsection
