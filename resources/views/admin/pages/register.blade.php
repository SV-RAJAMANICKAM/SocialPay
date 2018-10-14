<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>

</head>

<body class="authentication-bg">
 <!-- Start wrapper-->
 <div id="wrapper">
	<div class="card card-authentication1 mx-auto my-3 animated zoomIn">
		<div class="card-body">
		 <div class="card-content p-2">
		   <div class="text-center">
		 		<img src="assets/images/logo-icon.png"/>
		 	</div>
		  <div class="card-title text-uppercase text-center py-2">{{ __('Register') }}</div>
		    <form method="POST" action="{{ route('register') }}">
                @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="name" class="sr-only">{{ __('Name') }}</label>
				  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
				  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
              </div>
              <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="phone" class="sr-only">{{ __('Mobile Number') }}</label>
				  <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Mobile Number" required>
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                  <div class="form-control-position">
					  <i class="ti-mobile"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="password" class="sr-only">Password</label>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-left">
				  <label for="password-confirm" class="sr-only">Retry Password</label>
				  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign Up</button>
			  </div>

			  <div class="form-group text-center">
			   <p class="text-muted">Already have an account? <a href="{{ URL::to('/user_login') }}"> Sign In here</a></p>
			  </div>
			  <div class="form-group text-center">
			    <hr>
				<h5>OR</h5>
			 </div>
			 <div class="form-group text-center">
				<button type="button" class="btn btn-facebook shadow-facebook text-white btn-block waves-effect waves-light"><i class="fa fa-facebook-square"></i> Sign In With Facebook</button>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- waves effect js -->
  <script src="assets/js/waves.js"></script>
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

</body>
</html>
