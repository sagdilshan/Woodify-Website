{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('main-layout.header')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Forgot Password')
@section('mainpage')

    <body class="page-template belle">
        <div class="pageWrapper">
            <br><br><br>
            <!--Body Content-->
            <div id="page-content">
                <!--Page Title-->
                <div class="page section-header text-center">
                    <div class="page-title">
                        <div class="wrapper">
                            <h1 class="page-width">Forgot Password</h1>
                        </div>
                    </div>
                </div>
                <!--End Page Title-->

                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 main-col offset-md-3">
                            <span  style="font-size: 1rem;">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</span><br>
<br>
                            <div class="mb-4">
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">

                                            <div class="form-group">
                                                <label for="Email" style="font-size: 1rem;font-weight: bold;">Email</label>
                                                <input id="email" type="email" name="email" :value="old('email')"
                                                    required autofocus>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="text-center col-12 col-sm-12 col-md-12 col-lg-12">

                                            <input type="submit" class="btn mb-3" value="Email Password Reset Link">
                                            <p class="mb-4">
                                                <a href="{{ route('login') }}">Login</a> &nbsp; |
                                                &nbsp;
                                                <a href="{{ route('register') }}">Create account</a>
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
