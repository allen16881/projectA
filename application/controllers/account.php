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
      Event::fire('account.login',array('user'=>Auth::user()));
      return Redirect::to(URL::home());
    } else {
      return Redirect::to(URL::to_action('account/login'))
              ->with('login_errors', true);
    }
  }

  public function get_signup()
  {     
    return View::make('account.signup');
  }

  public function post_signup()
  {      

    $validation = User::validate(Input::all());

    if ($validation->fails())
    {
      return Redirect::to(URL::to_action('account@signup'))
              ->with('signup_errors', $validation->errors->messages)
              ->with_input('except', array('password'));
    } else {
      $user = User::create(array(
        'email' => Input::get('email'),
        'password' => Hash::make(Input::get('password')),
      ));
      
      Event::fire('account.signup',array('user'=>$user));

      if ($user) {
        Auth::attempt(array(
          'username' => Input::get('email'),
          'password' => Input::get('password'))
        );
        return Redirect::to(URL::home());
      } else {
        return Redirect::to(URL::to_action('account@signup'))
        ->with_input('except', array('password'));
      }
    }
  }

  public function get_logout()
  {     
    Event::fire('account.logout',array('user'=>Auth::user()));
    Auth::logout();
    return Redirect::to(URL::home());
  }
}