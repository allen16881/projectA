<?php 
\Laravel\Event::listen('account.signup', function($user_data)
{
	if ($user_data)
	{
		$user = User::create(array(
        'username' => Input::get('username'),
        'email' => Input::get('email'),
        'password' => Hash::make(Input::get('password')),
				'created_on' => new DateTime,
				'updated_on' => new DateTime,
				'last_login' => new DateTime,
				'last_visit' => new DateTime,
				'last_activity' => new DateTime,
    ));
    return $user;
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