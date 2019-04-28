<?php

use App\Events\SendNotification;
use App\User;

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function() {
    return view('test');
});


Route::get('/getUsers', 'UserController@index');

Route::post('/sendNotif', function() {
    event(new SendNotification(request()->message));
});

