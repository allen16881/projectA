<?php
/**
* User model
*/
class User extends Eloquent
{
	public static $table = 'users';

	public static function validate($input) {

    $rules = array(
      'username'  => 'required|max:50',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed',
    );

    return Validator::make($input, $rules);
	}
}