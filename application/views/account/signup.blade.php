@layout('layouts.main')

@section('title')
{{__('account.signup')}}
@endsection

@section('content')
	<!-- Main page container -->
	<section class="container login" role="main">
		
		<div class="data-block">
			{{ Form::open() }}
				<!-- check for signup errors flash var -->
				@if (Session::has('signup_errors'))
					{{var_dump(Session::get('signup_errors'))}}
				@endif
				<!-- username field -->
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="signup">{{__('account.username')}}</label>
						<div class="controls">
							{{ Form::input('text', 'username', Input::old('username'), array('placeholder'=>__('account.username'))) }}
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="signup">{{__('account.email')}}</label>
						<div class="controls">
							{{ Form::input('text', 'email', Input::old('email'), array('placeholder'=>__('account.email'))) }}
						</div>
					</div>
					<!-- password field -->
					<div class="control-group">
						<label class="control-label" for="signup">{{__('account.password')}}</label>
						<div class="controls">
							{{ Form::input('password', 'password', '', array('placeholder'=>__('account.password'))) }}
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="signup">{{__('account.confirmed_password')}}</label>
						<div class="controls">
							{{ Form::input('password', 'password_confirmation', '', array('placeholder'=>__('account.confirmed_password'))) }}
						</div>
					</div>
					<!-- submit button -->
					<div class="form-actions">
						{{ Form::submit( __('account.signup') ,array('class'=>'btn btn-large btn-inverse btn-alt')) }}
					</div>
				</fieldset>
			{{ Form::close() }}
			
		</div>
		<p><a href="{{URL::to('account/login')}}" class="pull-right"><small>{{__('account.login')}}</small></a></p>
		
	</section>
	<!-- /Main page container -->
@endsection

@section('footer')	
		<!-- Scripts -->
		<script src="<?php echo URL::base();?>/js/bootstrap/bootstrap-tooltip.js"></script>
@endsection