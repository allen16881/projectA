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
				@if (Session::has('login_errors'))
					<span class="error">{{__('account.login_username_password_error')}}</span>
				@endif
				<!-- username field -->
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="login">{{__('account.email')}}</label>
						<div class="controls">
							{{ Form::input('text', 'email', '', array('placeholder'=>__('account.email'))) }}
						</div>
					</div>
					<!-- password field -->
					<div class="control-group">
						<label class="control-label" for="login">{{__('account.password')}}</label>
						<div class="controls">
							{{ Form::input('password', 'password', '', array('placeholder'=>__('account.password'))) }}
							<label class="checkbox">
								<input id="optionsCheckbox" type="checkbox" value="option1"> {{__('account.remember_me')}}
							</label>
						</div>
					</div>
					<!-- submit button -->
					<div class="form-actions">
						{{ Form::submit( __('account.login') ,array('class'=>'btn btn-large btn-inverse btn-alt')) }}
					</div>
				</fieldset>
			{{ Form::close() }}
		</div>
		<p><a href="{{URL::to('account/reset')}}" class="pull-right"><small>{{__('account.password_reset')}}</small></a></p>
		<p><a href="{{URL::to('account/signup')}}" class="pull-left"><small>{{__('account.signup')}}</small></a></p>
	</section>
	<!-- /Main page container -->
@endsection

@section('footer')	
		<!-- Scripts -->
		<script src="<?php echo URL::base();?>/js/bootstrap/bootstrap-tooltip.js"></script>
@endsection