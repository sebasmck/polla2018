<?php

Route::get('/', function () {
    return view('auth/login');
});


Route::post('userregistration', 'Auth\RegisterController@register')->name('userregistration');

Route::get('awaitingconfirmation', 'HomeController@awaiting')->name('awaitingconfirmation');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('rules', 'HomeController@rules')->name('rules');

// Polls
Route::post('pollregistration', 'HomeController@register')->name('pollregistration');
