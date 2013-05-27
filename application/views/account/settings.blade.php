@layout('layouts.backend')

@section('title')
{{__('account.settings')}}
@endsection

@section('right')	
<div class="row">
				
	<!-- Data block -->
	<article class="span12 data-block">
		<div class="data-container">
			<header>
				<h2>{{__('account.settings')}}</h2>
			</header>
			<section class="tab-content">
				<!-- Tab #basic -->
				<div class="tab-pane active" id="basic">
					<!-- Example horizontal forms -->
					<div class="row-fluid">
						<!-- Main page container -->
							@if (Session::has('settings_errors'))
								<div class="alert alert alert-error">
									<button class="close" data-dismiss="alert">×</button>
									<strong>{{__('account.settings_errors')}}</strong>
								</div>
							@endif
							@if (Session::has('settings_success'))
								<div class="alert alert alert-success">
									<button class="close" data-dismiss="alert">×</button>
									<strong>{{__('account.settings_success')}}</strong>
								</div>
							@endif
							{{ Form::open(URL::current(),'POST',array('class'=>'form-horizontal')) }}
								<fieldset>
									<div class="control-group">
										<label class="control-label" for="input">{{__('account.email')}}</label>
										<div class="controls">
											{{ Form::input('text', 'email', Input::old('email'), array('placeholder'=>__('account.email'),'class'=>'input-xlarge')) }}
											<p class="help-block">{{__('account.input_new_email')}}</p>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label" for="input">{{__('account.username')}}</label>
										<div class="controls">
											{{ Form::input('text', 'username', Input::old('username'), array('placeholder'=>__('account.username'),'class'=>'input-xlarge')) }}
											<p class="help-block">{{__('account.input_new_username')}}</p>
										</div>
									</div>


									<div class="control-group">
										<label class="control-label" for="input">{{__('account.password')}}</label>
										<div class="controls">
											{{HTML::link(URL::to_action('account/settings_password'),__('account.settings_password'))}}
										</div>
									</div>

									<div class="form-actions">
										{{ Form::submit( __('account.save') ,array('class'=>'btn btn-alt btn-large btn-primary')) }}
									</div>
								</fieldset>
							{{ Form::close() }}
						<!-- /Main page container -->
					</div>
				</div>
				<!-- /Tab #basic -->
			</section>
		</div>
	</article>
	<!-- /Data block -->
	
</div>	
@endsection

@section('footer')	
	<footer class="info">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam blandit, dolor mollis adipiscing elementum, ipsum turpis euismod tellus, vitae mollis velit leo id nisi.</p>
	</footer>
	<script src="<?php echo URL::base();?>/js/bootstrap/bootstrap-alert.js"></script>
@endsection