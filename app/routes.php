<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('start');
});

Route::get('/start', function(){
	return View::make('start');
});


Route::get('login', function(){
    $facebook = new Facebook(Config::get('facebook'));
    $params = [
        'redirect_uri' => url('login/callback'),
        'scope' => 'email'
    ];
    return Redirect::to($facebook->getLoginUrl($params));
});

Route::get('login/callback', function() {
    $code = Input::get('code');
    if (strlen($code) == 0) return Redirect::to('/')->with('message', 'Facebook communication error!');
    $facebook = new Facebook(Config::get('facebook'));
    $uid = $facebook->getUser();
    if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error.');

    $me = $facebook->api('/me');

    $user = User::where('uid', $me['id'])->first();
    if ($user) {
        Auth::login($user);
    } else {
        User::create([
            'name' => $me['name'],
            'username' => $me['name'],
            'password' => Hash::make('1234')
        ]);
    }
    return Redirect::to('/');
});


