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

		<header class="container">
			<!-- Main page logo -->
			<h1><a href="{{URL::home()}}" class="brand">ProjectA</a></h1>
			
			<!-- Main page headline -->
			<p>A beautifully minimalistic admin template</p>
			
			<!-- Alternative navigation -->
			<nav>
				<ul>
					<li>
						<form class="nav-search">
							<input type="text" placeholder="Search…">
						</form>
					</li>
					@if(Auth::user())
						<li><a href="{{URL::to_action('account/logout')}}">{{__('account.logout')}}</a></li>  
					@else
						<li><a href="{{URL::to_action('account/login')}}">{{__('account.login')}}</a></li>  
					@endif			
				</ul>
			</nav>
			<!-- /Alternative navigation -->
		</header>
		

		<section class="container" role="main">
		
		@section('left')
			<!-- Left (navigation) side -->
			<div class="navigation-block affix-top">
			
				<!-- User profile -->
				<section class="user-profile">
					<figure>
						<img alt="John Pixel avatar" src="{{URL::base() . '/' . Auth::user()->avatar}}">
						<figcaption>
							<strong><a href="#" class="">{{Auth::user()->username}}</a></strong>
							<em>{{Auth::user()->email}}</em>
							<ul>
								<li><a class="btn btn-primary btn-flat" href="{{URL::to_action('account.settings')}}" data-original-title="Account settings">{{__('account.settings')}}</a></li>
								<li><a class="btn btn-primary btn-flat" href="#" data-original-title="Message inbox">inbox</a></li>
							</ul>
						</figcaption>
					</figure>
				</section>
				<!-- /User profile -->
				
				<!-- Main navigation -->
				<nav class="main-navigation" role="navigation">
					<ul>
						<li class="current"><a href="{{URL::to_action('dashboard/index')}}" class="no-submenu"><span class="awe-home"></span>{{__('dashboard.dashboard')}}</a></li>
						<li><a href="forms.html" class="no-submenu"><span class="awe-tasks"></span>Forms</a></li>
						<li><a href="charts.html" class="no-submenu"><span class="awe-signal"></span>Charts <span class="badge">7</span></a></li>
						<li><a href="tables.html" class="no-submenu"><span class="awe-table"></span>Tables <span class="badge">23</span></a></li>
						<li>
							<a href="#"><span class="awe-picture"></span>Gallery</a>
							<ul style="display: none;">
								<li><a href="gallery.html">Car Gallery</a></li>
								<li><a href="gallery.html">Food Gallery</a></li>
								<li><a href="gallery.html">Art Gallery</a></li>
								<li><a href="gallery.html">Animal Gallery</a></li>
								<li><a href="gallery.html">Super long name to see how it collapse</a></li>
							</ul>
						</li>
						<li><a href="file-explorer.html" class="no-submenu"><span class="awe-file"></span>File explorer</a></li>
						<li><a href="calendar.html" class="no-submenu"><span class="awe-calendar"></span>Calendar</a></li>
						<li><a href="ui-buttons.html" class="no-submenu"><span class="awe-magic"></span>UI &amp; Buttons</a></li>
						<li><a href="typo.html" class="no-submenu"><span class="awe-font"></span>Typography</a></li>
						<li><a href="grid.html" class="no-submenu"><span class="awe-th"></span>Grid</a></li>
						<li>
							<a href="#"><span class="awe-heart"></span>Goodies</a>
							<ul style="display: none;">
								<li><a href="goodies.html">Goodies</a></li>
								<li><a href="401.html">Error 401</a></li>
								<li><a href="403.html">Error 403</a></li>
								<li><a href="404.html">Error 404</a></li>
								<li><a href="500.html">Error 500</a></li>
								<li><a href="503.html">Error 503</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /Main navigation -->
				
			</div>
			<!-- Left (navigation) side -->
		@yield_section

		@yield('right')

		@yield('footer')

	</body>
</html>