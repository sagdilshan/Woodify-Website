{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="login" :value="__('Username / Email / Phone')" />
            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Page - Woodify</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('../assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('../assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Woodify</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg" style="font-size: 1.1rem">Sign in to Woodify System</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-input-error :messages="$errors->get('login')" class="mt-2 text-danger" />
        <div class="input-group mb-3">
          <input class="form-control" id="login" type="text" name="login" :value="old('login')" required autofocus autocomplete="username"  placeholder="Username / Phone / Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
        <div class="input-group mb-3">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-12">
            <div class="icheck-dark">
              <input type="checkbox" id="remember_me" name="remember">
              <label for="remember_me">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->

          <!-- /.col -->
        </div>

      <div class="social-auth-links text-center mt-2 mb-3 mt-2 mb-3">
        <button  class="btn btn-info btn-block" type="submit">Sign In</button>

        <a href="{{route('register')}}" class="btn btn-block btn-dark">
            Register a New Membership
          </a>
      </div>
    </form>

      <p class="mb-1">
        <a href="{{ route('password.request') }}" style="color: black;">I Forgot My Password</a>
      </p>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('../assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('../assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('../assets/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

