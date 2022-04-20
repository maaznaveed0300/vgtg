<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VGTG | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
    <div class="register-logo">
        <a href="{{ url('/') }}"><img src="{{ asset('vgtgimg/vgtglogo.png') }}" alt=""></a>
      </div>
<div class="register-box py-5">

  <div class="card col-md-12">
    <div class="card-body">
        <form method="POST" action="{{ url('customregister') }}">
            @csrf

            <div class="row mb-3">
                {{-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{-- <div class="row mb-3">
                <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div> --}}
            <div class="row mb-3">
                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12 text-center">
                    <h2>OR</h2>
                </div>
            </div>
            <div class="row mb-3">
                {{-- <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label> --}}

                <div class="col-md-12">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Phone / Whatsapp" value="{{ old('phone') }}" required autocomplete="email">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="{{ url('/login') }}" class="btn btn-block bg-gradient-success">Login</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-block bg-gradient-success">
                            {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>

