<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Authentication routes...
Route::get('login', function () 
{
    return redirect('auth/login');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

Route::get('logout', function ()
{
    return redirect('auth/logout');
});
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', function ()
{
    return redirect('auth/register');
});
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
   'password' => 'Auth\PasswordController',
]);

// AuthenticatedUser area

$router->group([
        'namespace' => 'Auth',
        'middleware' => 'auth',
    ], function () {
      	get('user/welcome', function(){
      	return "Welcome MaePaySoh";
      });
    });

// FbUser area

Route::get('auth/login_with_fb', 'Auth\AuthController@redirectToProvider');

Route::get('auth/callback', 'Auth\AuthController@handleProviderCallback');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes... 
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');