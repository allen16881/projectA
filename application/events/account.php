<?php 
\Laravel\Event::listen('account.signup', function($user)
{
	if ($user)
	{
		$user->created_on = new DateTime;
		$user->updated_on = new DateTime;
		$user->last_login = new DateTime;
		$user->last_visit = new DateTime;
		$user->last_activity = new DateTime;
	}
});

\Laravel\Event::listen('account.login', function()
{
	$user = User::find(Auth::user()->id);
  $user->last_login = new DateTime;
  $user->save();
});

\Laravel\Event::listen('account.logout', function()
{
	$user = User::find(Auth::user()->id);
  $user->last_visit = new DateTime;
  $user->save();
});