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
    $events = EventModel::all();
    return View::make('start', compact('events'));
});

Route::get('/events', function()
{
    $events = EventModel::all();
    return View::make('start', compact('events'));
});

Route::post('/events', function()
{
    $event = EventModel::create(Input::all());
    return Redirect::to('events/'.$event->id);
});

Route::get('/settings', function()
{
    return View::make('settings');
});

Route::get('/events/random', function()
{
    $event = EventModel::first();
    return View::make('event', compact('event'));
});

Route::get('/events/my', function()
{
    $events = EventModel::all();
    return View::make('start', compact('events'));
});

Route::get('/events/new', function()
{
    return View::make('new');
});

Route::get('/events/{id}', function($id)
{
    $event = EventModel::find($id);
    return View::make('event', compact('event'));
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


