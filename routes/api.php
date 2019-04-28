<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/notifications', 'NotificationController@getNotifs');

Route::post('/trigger', 'NotificationController@trigger');
