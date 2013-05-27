@layout('layouts.main')

@section('title')
{{__('account.login')}}
@endsection

@section('content')
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
@endsection

@section('footer')	
		<!-- Scripts -->
		<script src="<?php echo URL::base();?>/js/bootstrap/bootstrap-tooltip.js"></script>
@endsection