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

Route::get('/admin', 'HomeController@indexAdmin')->name('admin');

Route::get('/assign', 'AdminsController@assignRep')->name('assign');

Route::post('/assigntouser', 'AdminsController@assignToUser');

Route::get('/addrep', 'AdminsController@addRep')->name('addRep');

Route::post('/storerep', 'AdminsController@storeRep')->name('storerep');



Route::Resource('admins', 'AdminsController');


