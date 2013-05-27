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

      $user = Event::fire('account.signup',array('user_data'=>Input::all()));

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

  public function get_reset()
  {     
    return View::make('account.reset');
  }

  public function post_reset()
  {
    $email = Input::get('email');
    $username = Input::get('username');
    $user = User::where_email_and_username($email,$username)->first();
    if ($user) {
      $new_password = substr(md5(mt_rand()),0,8);
      $user->password = Hash::make($new_password);
      $user->save();
      $result = Event::fire('account.reset', array('email'=>$email,'new_password'=>$new_password));
      if ($result) {
        return Redirect::to(URL::home());
      }
    } else {
      return Redirect::to(URL::to_action('account.reset'))
              ->with('reset_error',true)
              ->with_input();
    }        
  }

  public function get_settings()
  {     
    return View::make('account.settings');
  }

  public function post_settings()
  {     
    $email = Input::get('email');
    $username = Input::get('username');
    $user = Auth::user();
    if ($email) {
      $user->email = $email;
    }
    if ($username) {
      $user->username = $username;
    }
    if ($user->save()) {
      return Redirect::to(URL::to_action('account.settings'))
              ->with('settings_success',true);
    } else {
      return Redirect::to(URL::to_action('account.settings'))
              ->with('settings_error',true)
              ->with_input();
    }
    
  }

  public function get_settings_password()
  {     
    return View::make('account.settings_password');
  }

  public function post_settings_password()
  {     
    $old_password = Input::get('old_password');
    $new_password = Input::get('new_password');
    $user = Auth::user();
    if (Hash::check($old_password, $user->password)) {
      $user->password = Hash::make($new_password);
      $user->save();
      return Redirect::to(URL::to_action('account.settings_password'))
                ->with('settings_password_success',true);
    } else {
      return Redirect::to(URL::to_action('account.settings_password'))
              ->with('settings_password_errors',__('account.invaild_old_password'));
    }    
  }
}