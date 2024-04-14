@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Contact Us')
@section('mainpage')



    <body class="template-collection belle">
        <div class="pageWrapper">

            <br><br><br>

<!--Body Content-->
<div id="page-content">
    <!--Page Title-->
    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-width">Contact Us</h1></div>
          </div>
    </div>
    <!--End Page Title-->


    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4">
                <h2>Drop Us A Message</h2>
                <p>Do you have any woodify system problem... Contact Our Admins</p>
                <div class="formFeilds contact-form form-vertical">
                  <form action="" method="get"  id="contact_form" class="contact-form">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                          <input type="text" id="ContactFormName" name="name" placeholder="Name" value="" required="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                        <input type="email" id="ContactFormEmail" name="email" placeholder="Email" value="" required="">
                        </div>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                        <input required="" type="tel" id="ContactFormPhone" name="phone" pattern="[0-9\-]*" placeholder="Phone Number" value="">
                        </div>
                      </div>
                      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                          <div class="form-group">
                        <input required="" type="text" id="ContactSubject" name="subject" placeholder="Subject" value="">
                        </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                        <textarea required="" rows="10" id="ContactFormMessage" name="message" placeholder="Your Message"></textarea>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <input type="submit" class="btn" value="Send Message" required>
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
                    <li class="phone"><p>(+94) 77 991 9634</p></li>
                    <li class="email"></i><p>contact@woodify.com</p></li>
                </ul>
                <hr />
                <ul class="list--inline site-footer__social-icons social-icons">
                    <li><a class="social-icons__link" href="#" target="_blank" title="Woodify System on Facebook"><i class="icon icon-facebook"></i></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Woodify System on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                    <li><a class="social-icons__link" href="#" target="_blank" title="Woodify System on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--End Body Content-->



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- JavaScript to handle Load More button -->

    </body>


@endsection
