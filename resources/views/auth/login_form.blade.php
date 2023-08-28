<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="assets/img/foto_empJAKPUSK.png"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="assets/lib/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!--===============================================================================================-->
	<style>
		body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .limiter {
            width: 100%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f0f0f0;
        }

        .container-login100 {
            width: 100%;
            background-image: url('assets/img/BACKGROUND-2.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 20px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .wrap-login100 {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            border-radius: 10px;
        }

        .login100-form-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .login100-form-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input100 {
            width: 100%;
            border: 2px solid #d9d9d9;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
        }

        .has-feedback .form-control-feedback {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 20px;
            color: #999;
        }

        .dropdown-user select {
            width: 100%;
            border: 2px solid #d9d9d9;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
        }

        .btn-primary {
            background-color: white;
            border-color: white;
            color: #333;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            padding: 10px 0;
        }
	</style>	
</head>
<body>
	<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<span class="login100-form-logo">
						<img src="assets/img/foto_empJAKPUSK.png" style="height: auto; width: 113px;">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif

					@if (session('error'))
					<div class="alert alert-danger">
						{{ session('error') }}
					</div>
			        @endif
    
					<form class="form-horizontal" method="POST" action="/authenticate">
						{{ csrf_field() }}
						<div class="wrap-input100 form-group has-feedback">
							<input type="text" class="form-control input100" name="NPP" value="{{ old('NPP') }}" placeholder="NPP">
							@if ($errors->has('NPP'))
								<span class="help-block">
									<strong>{{ $errors->first('NPP') }}</strong>
								</span>
							@endif
							<span class="focus-input100 glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
						<div class="wrap-input100 form-group has-feedback">
							<input type="password" class="form-control input100" name="password" placeholder="Password">
							@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
							<span class="focus-input100 glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
						<div class="dropdown-user" style="display: flex;justify-content: center;" >
  							<select name="role" style="height: 42px;width: 211px;margin-bottom: 21px;">
    							<option style="text-align: center;" >Login Sebagai</option>
    							<option value="Admin" style="text-align: center;">Admin</option>
    							<option value="Atasan" style="text-align: center;">Atasan</option>
								<option value="Anggota" style="text-align: center;">Anggota</option>
  							</select>
						  	@error('role')
							<span class="help-block">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="row">
							<div class="col-xs-8">
							</div>
							<!-- /.col -->
							<div class="col-xs-4" style="display: flex;justify-content: center;">
							<button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:white; border-color:white;">Sign In</button>
							</div>
							<!-- /.col -->
						</div>
					</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!-- ===============================================================================================
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!-- ===============================================================================================
	<script src="vendor/animsition/js/animsition.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="vendor/countdowntime/countdowntime.js"></script> -->
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>