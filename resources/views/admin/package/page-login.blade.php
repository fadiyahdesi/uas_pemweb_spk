<!doctype html>
<html lang="en">

<head>
	<title>Halaman Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php echo url('/'); ?>/css/demo.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('/'); ?>/img/apple-icon.png">
	<link rel="icon" type="image/jpg" sizes="80x80" href="<?php echo url('/'); ?>/img/logoutama.jpg">
</head>

<body>
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="<?php echo url('/'); ?>/img/logoutama.jpg" alt=""></div>
								<p class="lead">Silakan masuk untuk mengakses akun Anda.</p>
							</div>
							<form class="form-auth-small" action="{{ route('postlogin') }}" method="post">
								@csrf
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" class="form-control" id="signin-email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">SIGN IN</button>
								<div class="bottom">
									<span class="helper-text"></i> <a href="/register">SIGN UP?</a></span>
									<span class="helper-text"></i> <a href="/" style="color:darkorange">Back to Home</a></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="<?php echo url('/'); ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo url('/'); ?>/scripts/klorofil-common.js"></script>
</body>

</html>