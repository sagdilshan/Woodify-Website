@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login Page')
@section('mainpage')

    <body class="page-template belle">
        <div class="pageWrapper">
            <br><br><br><br>
            <!--Body Content-->
            <div id="page-content">
                <!--Page Title-->
                <div class="page section-header text-center">
                    <div class="page-title">
                        <div class="wrapper">
                            <h1 class="page-width">Login</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                            <div class="mb-4">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                                            <div class="form-group">
                                                <label for="CustomerEmail">Username / Phone / Email</label>
                                                <input  class="" id="login" type="text" name="login" :value="old('login')" required autofocus autocomplete="username"  >
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="CustomerPassword">Password</label>
                                                <input id="password" type="password" name="password" required autocomplete="current-password" class="">
                                            </div>

                                            <x-input-error :messages="$errors->get('login')" class="mt-2 text-danger text-bold" />
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">

                                            <input type="submit" class="btn mb-3" value="Sign In">
                                            <p class="mb-4">
                                                <a href="#" id="RecoverPassword">Forgot your password?</a> &nbsp; |
                                                &nbsp;
                                                <a href="register.html" id="customer_register_link">Create account</a>
                                            </p>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
    <!--End Body Content-->
@endsection

