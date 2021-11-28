<!DOCTYPE html>
<html>
<head>
<base href="{{asset('public/layout/backend')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Đăng Nhập</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<link rel="icon" type="image/png" href="{{asset('public/cssLogin/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/cssLogin/css/main.css')}}">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<center>
		<div class="login100-pic js-tilt" data-tilt>
			<img height="150" src="{{asset('public/cssLogin/images/img-01.png')}}" alt="IMG">
		</div>
	</center>
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						
						<div class="panel-heading">Đăng Nhập</div>
						<div class="panel-body">
							<form role="form" method="post">
								<fieldset>
									@include('errors.note')
									<div class="form-group">
										<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
											<input class="input100" placeholder="E-mail" name="email" type="email" autofocus="" value="{{old('email')}}">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</span>
										</div>
										{{-- <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{old('email')}}"> --}}
									</div>
									<div class="form-group">
										<div class="wrap-input100 validate-input" data-validate = "Password is required">
											<input class="input100"  placeholder="Password" name="password" type="password" value="">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-lock" aria-hidden="true"></i>
											</span>
										{{-- <input class="form-control" placeholder="Password" name="password" type="password" value=""> --}}
										</div>
									</div>
									<div class="checkbox">
										<label>
											<input name="remember" type="checkbox" value="Remember Me">Remember Me
										</label>
									</div>
							
								<div class="container-login100-form-btn">
										<input class="login100-form-btn" type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
										{{csrf_field()}}
									</div>
									<div class="text-center p-t-12">
										<span class="txt1">
											Forgot
										</span>
										<a class="txt2" href="#">
											Username / Password?
										</a>
									</div>
				
									
								</fieldset>
								
							</form>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->	



	{{-- <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('public/cssLogin/images/img-01.png')}}" alt="IMG">
				</div>

			
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" placeholder="E-mail" name="email" type="email" autofocus="" value="{{old('email')}}">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100"  placeholder="Password" name="password" type="password" value="">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<div class="checkbox">
						<label>
							<input name="remember" type="checkbox" value="Remember Me">Remember Me
						</label>
					</div>
					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" name="submit" value="Đăng nhập" class="btn btn-primary">
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
					{{csrf_field()}}
			</div>
		</div>
	</div> --}}
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
	<!--===============================================================================================-->	
	<script src="{{asset('pubic/cssLogin/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pubic/cssLogin/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('pubic/cssLogin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pubic/cssLogin/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('pubic/cssLogin/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="{{asset('public/cssLogin/js/main.js')}}"></script>
</body>

</html>
