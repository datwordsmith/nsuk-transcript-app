<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('admin/assets/favicon/apple-icon-57x57.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/favicon/favicon-16x16.png')}}">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('admin/vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row shadow rounded">
                <!--LEFT-->
                <div class="card col-md-4 p-4 mb-0 border-0">
                    <div class="card-body text-center">


                    </div>
                </div>

                <!--RIGHT-->
                <div class="card col-md-8 py-5 border-0">
                    <div class="card-body">
                    <div>
                        <h2>Login</h2>
                        <p><small>Sign In to your account</small></p>
                    </div>
                    <form class="form-floating" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="floatingInput">{{ __('Email Address') }}</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                            <label>{{ __('Password') }}</label>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 text-start">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-start" href="{{ route('password.request') }}">
                                        {{ __('Forgot Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <script>
    </script>

  </body>
</html>
