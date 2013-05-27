<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		@section('assets')
		<!-- CSS styles -->
		<link rel='stylesheet' type='text/css' href='<?php echo URL::base();?>/css/huraga-red.css'>
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="<?php echo URL::base();?>/img/icons/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL::base();?>/img/icons/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL::base();?>/img/icons/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo URL::base();?>/img/icons/apple-touch-icon-57-precomposed.png">
		
		<!-- JS Libs -->
		<script src="http://upcdn.b0.upaiyun.com/libs/jquery/jquery-1.9.1.min.js"></script>
		<script src="http://upcdn.b0.upaiyun.com/libs/modernizr/modernizr-2.6.2.min.js"></script>
		<script src="<?php echo URL::base();?>/js/libs/selectivizr.js"></script>
		@yield_section
		
	</head>

	<body>

		@yield('content')

		@yield('footer')

	</body>
</html>