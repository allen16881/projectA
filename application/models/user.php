<?php
/**
* User model
*/
class User extends Eloquent
{
	public static $timestamps = false;
	public static $table = 'users';

	public static function validate($input) {

    $rules = array(
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed',
    );

    return Validator::make($input, $rules);
	}
}