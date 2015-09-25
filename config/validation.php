<?php
	/*
	|--------------------------------------------------------------------------
	| Validation Rules
	|--------------------------------------------------------------------------
	|
	| Sentry Validation Rules
	|
	*/
return array(
	'register' => array(
            'username' => 'unique:users|required|min:4',
            'email' => 'unique:users|required|email',
            'password' => 'required|alpha_num|between:4,30|confirmed',
            'password_confirmation' => 'required|alpha_num|between:4,30'
        ),
	'login' => array(
            'username' => 'required|min:4',
            'password' => 'required|alpha_num'
        ),
	'reset' => array(
		'email' => 'required|email'
		),

);