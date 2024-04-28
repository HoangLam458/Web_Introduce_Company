<!DOCTYPE html>
<html lang="en">
    <title>TMC Group - Admin</title>
    <link rel="shortcut icon" href="{{ asset('Theme_css/images/2Q.png')}}">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Login_css/css/main.css')}}">
</head>
<body style="background-color: #666666;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('login') }}" method="POST">
                    @csrf
					<span class="login100-form-title p-b-43">
						Login to Administrator
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input required class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input required class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
				<div class="login100-more" style="background-image: url('{{asset('img/tmc3.jpg')}}">
				</div>
			</div>
		</div>
	</div>
	<script src="{{asset('Login_css/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('Login_css/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('Login_css/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Login_css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('Login_css/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('Login_css/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('Login_css/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('Login_css/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('Login_css/js/main.js')}}"></script>
</body>
</html>
