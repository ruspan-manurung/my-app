<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}" rel="stylesheet">

  <style>
    .bg-login-image {
      background: url('{{ asset('admin_assets/img/login-bg.jpg') }}');
      background-position: center;
      background-size: cover;
    }
  </style>
</head>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>

                  <!-- Display validation errors -->
                  @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  @endif

<form action="{{ route('login.action') }}" method="POST" class="user">
  @csrf

  <!-- Email -->
  <div class="form-group">
    <input name="email" type="email" class="form-control form-control-user"
      id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."
      value="{{ old('email') }}">
    @error('email')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>

  <!-- Password -->
  <div class="form-group">
    <input name="password" type="password" class="form-control form-control-user"
      id="exampleInputPassword" placeholder="Password">
    @error('password')
      <small class="text-danger">{{ $message }}</small>
    @enderror
  </div>

  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary btn-user btn-block">
    Login
  </button>
</form>

                  <hr>
                  <div class="text-center">
                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- col -->
    </div> <!-- row -->
  </div> <!-- container -->

  <!-- Scripts -->
  <script src="{{ asset('admin_assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
