<!doctype html>
<html lang="en">

<head>
	<title>Registrasi</title>
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
	<link rel="" sizes="100x100" href="<?php echo url('/'); ?>/img/logoutama.jpg">
	<link rel="icon" type="image/jpg" sizes="100x100" href="<?php echo url('/'); ?>/img/logoutama.jpg">
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
								<p class="lead">Selamat Datang! Daftarkan akun Anda</p>
							</div>
							<form class="form-auth-small" action="{{ route('postregister') }}" method="post">
								@csrf
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" id="signin-email" name="name" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input type="email" class="form-control" id="signin-email" name="email" placeholder="Masukkan Username">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password" name="password" placeholder="Masukkan Password">
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">SIGN UP</button>
								<div class="bottom">
									<span class="helper-text"><a href="/login">SIGN IN?</a></span><br>
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
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>
</html>

