<!doctype html>
<html lang="en">

<head>
	@if (auth()->user()->role=='Admin')
	<title>Admin</title>
	@endif
	@if (auth()->user()->role=='Customer')
	<title>Halaman AHP</title>
	@endif
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
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo url('/'); ?>/img/logoutama.jpg">
	<link rel="icon" type="image" sizes="96x96" href="<?php echo url('/'); ?>/img/logoutama.jpg">
</head>

<body>
	<div id="wrapper">
		@include('admin.layouts.header')
		@include('admin.layouts.sidebar')
		@yield('content')
		@include('admin.layouts.footer')
	</div>
	
	<script src="<?php echo url('/'); ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?php echo url('/'); ?>/vendor/chartist/js/chartist.min.js"></script>
	<script src="<?php echo url('/'); ?>/scripts/klorofil-common.js"></script>
</body>
</html>