<?php
\Laravel\Event::listen('account.reset', function($email,$password)
{
	try {
		Message::to($email)
	    ->from(Config::get('messages::config.transports.smtp.username'), 'Sitename')
	    ->subject(__('account.password_reset'))
	    ->body(__('account.your_new_password_is') . $password)
	    ->send();	
	} catch (Exception $e) {
		throw new Exception("Smtp Config Error!");
	}
	return Message::was_sent() ? true : false;
});
