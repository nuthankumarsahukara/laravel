<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 16:23:04 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:title" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:description" content="W3crm:Customer Relationship Management Admin Bootstrap 5 Template">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>W3CRM Customer Relationship Management</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
	<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
   <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-7 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign up your account</h3>
							<p>Sign in to your account to start using W3CRM</p>
						</div>
						<form action="{{ route('store') }}" method="post">
							@csrf
							<div class="mb-4">
								<label class="mb-1 text-dark">Username</label>
								<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
								@if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif							
							</div>
							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
								@if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif

							</div>
							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Password</label>
								<div class="input-group" id="show_hide_password1">
									<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
									@if ($errors->has('password'))
										<span class="text-danger">{{ $errors->first('password') }}</span>
									@endif
									<span class="show-pass eye">
										<i class="fa fa-eye-slash"></i>
									</span>
								</div>
							</div>

							<div class="mb-4 position-relative">
								<label class="mb-1 text-dark">Confirm Password</label>
								<div class="input-group" id="show_hide_password2">
									<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
									<span class="show-pass eye">
										<i class="fa fa-eye-slash"></i>
									</span>
								</div>
							</div>

							<div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="page-forgot-password.html" class="btn-link text-primary">Sign in</a>
								</div>
							</div>
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Sign Up</button>
							</div>
							<h6 class="login-title"><span>Or continue with</span></h6>
							
							<div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div>
							<p class="text-center">Not registered?  
								<a class="btn-link text-primary" href="{{route('register')}}">Register</a>
							</p>
						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="index-2.html"><img src="{{asset('assets/images/logo-full.png')}}" class="mb-3 logo-dark" alt=""></a>
							<a href="index-2.html"><img src="{{asset('assets/images/logi-white.png')}}" class="mb-3 logo-light" alt=""></a>
							<p>CRM dashboard uses line charts to visualize customer-related metrics and trends over time.</p>
						</div>
						<div class="login-media text-center">
							<img src="{{asset('assets/images/login.png')}}" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $("#show_hide_password1 .show-pass").on('click', function (event) {
            event.preventDefault();
            var passwordInput = $("#password");
            var icon = $(this).find('i');
            if (passwordInput.attr("type") == "text") {
                passwordInput.attr('type', 'password');
                icon.removeClass("fa-eye");
                icon.addClass("fa-eye-slash");
            } else if (passwordInput.attr("type") == "password") {
                passwordInput.attr('type', 'text');
                icon.removeClass("fa-eye-slash");
                icon.addClass("fa-eye");
            }
        });

        $("#show_hide_password2 .show-pass").on('click', function (event) {
            event.preventDefault();
            var passwordInput = $("#password_confirmation");
            var icon = $(this).find('i');
            if (passwordInput.attr("type") == "text") {
                passwordInput.attr('type', 'password');
                icon.removeClass("fa-eye");
                icon.addClass("fa-eye-slash");
            } else if (passwordInput.attr("type") == "password") {
                passwordInput.attr('type', 'text');
                icon.removeClass("fa-eye-slash");
                icon.addClass("fa-eye");
            }
        });
    });
</script>

 <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
 <script src="{{asset('assets/js/custom.js')}}"></script>
<script src="{{asset('assets/js/deznav-init.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script>

<script src="{{asset('assets/js/styleSwitcher.js')}}"></script>
</body>

<!-- Mirrored from w3crm.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 16:23:04 GMT -->
</html>