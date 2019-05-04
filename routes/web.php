<?php

use App\Events\SendNotification;
use App\User;
use App\Notification;

Route::get('/', function () {
    return view('index');
});

Route::get('/test', function() {
    return view('test');
});

Route::get('/notifications', 'NotificationController@index');
Route::get('/notifications-test', 'NotificationController@test');


Route::get('/getUsers', 'UserController@index');

Route::post('/sendNotif', function() {
    event(new SendNotification(request()->message));
});

Route::get('/all', function() {
    return Notification::orderBy('created_at', 'DESC')->get();
});


Route::get('/prs', function() {
    return view('prs');
});

