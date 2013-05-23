<?php

class Account_Controller extends Base_Controller {
	public $restful = true;

	public function get_login()
	{
		return View::make('account.login');
	}

  public function post_login()
  {      
    $userdata = array(
      'username' => Input::get('email'),
      'password' => Input::get('password')
    );
    $result = Auth::attempt($userdata);

    if ( $result )
    {
      return Redirect::to(URL::home());
    } else {
      return Redirect::to(URL::to_action('account/login'))
              ->with('login_errors', true);
    }
  }
}