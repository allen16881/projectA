<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="description" content="">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
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
	<body>
		
		<!-- Main page container -->
		<section class="container login" role="main">
			
			<div class="data-block">
				{{ Form::open() }}
					<!-- check for login errors flash var -->
					@if (Session::has('reset_error'))
						<span class="error">{{__('account.reset_username_email_error')}}</span>
					@endif
					<!-- username field -->
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="login">{{__('account.username')}}</label>
							<div class="controls">
								{{ Form::input('text', 'username', Input::old('username'), array('placeholder'=>__('account.username'))) }}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="login">{{__('account.email')}}</label>
							<div class="controls">
								{{ Form::input('text', 'email', Input::old('email'), array('placeholder'=>__('account.email'))) }}
							</div>
						</div>
						<!-- submit button -->
						<div class="form-actions">
							{{ Form::submit( __('account.password_reset') ,array('class'=>'btn btn-large btn-inverse btn-alt')) }}
						</div>
					</fieldset>
				{{ Form::close() }}
			</div>
			<p><a href="{{URL::to('account/signup')}}" class="pull-left"><small>{{__('account.signup')}}</small></a></p>
			<p><a href="{{URL::to('account/login')}}" class="pull-right"><small>{{__('account.login')}}</small></a></p>
			
		</section>
		<!-- /Main page container -->
		
		<!-- Scripts -->
		<script src="<?php echo URL::base();?>/js/bootstrap/bootstrap-tooltip.js"></script>
		
	</body>
</html>
