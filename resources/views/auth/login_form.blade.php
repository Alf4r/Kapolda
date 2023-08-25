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
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/img/BACKGROUND-2.jpg');">
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
						<div class="dropdown-user" >
  							<select name="user" style="height: 43px; width: 392px; margin-bottom: 21px;">
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
							<div class="col-xs-4">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
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