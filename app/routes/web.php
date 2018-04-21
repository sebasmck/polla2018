<?php

Route::get('/', function () {
    return view('auth/login');
});


Route::post('userregistration', 'Auth\RegisterController@register')->name('userregistration');

Route::get('awaitingconfirmation', 'HomeController@awaiting')->name('awaitingconfirmation');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('rules', 'HomeController@rules')->name('rules');


Route::group(['middleware' => ['auth']], function() {

// Polls
Route::post('/pollregistration', 'HomeController@pollregistration')->name('pollregistration');

Route::get('/admin', 'HomeController@indexAdmin')->name('admin');

Route::get('/assign', 'AdminsController@assignRep')->name('assign');

Route::post('/assigntouser', 'AdminsController@assignToUser');

Route::get('/addrep', 'AdminsController@addRep')->name('addRep');

Route::post('/storerep', 'AdminsController@storeRep')->name('storerep');

Route::delete('users/{id}', [
    'as' => 'delete_user', 
    'uses' => 'AdminsController@deleteUser'
]);

Route::post('/editstatus', 'AdminsController@editStatus')->name('editstatus');

Route::get('/editrep/{id}', 'AdminsController@editRep')->name('editrep');

Route::post('/updaterep', 'AdminsController@updateRep')->name('updaterep');

Route::Resource('admins', 'AdminsController');

// PICKS


Route::post('/storea', 'PicksController@storeGroupA')->name('storea');

Route::Resource('picks', 'PicksController');




});
