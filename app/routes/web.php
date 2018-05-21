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

Route::get('/poolmanagement', 'HomeController@pollManagement')->name('pollmanagement');

Route::post('/pollregistration', 'HomeController@pollregistration')->name('pollregistration');

Route::get('/exportexcel', 'AdminsController@exportExcel')->name('exportexcel');

Route::get('admin', 'HomeController@indexAdmin')->name('admin');

Route::get('assign', 'AdminsController@assignRep')->name('assign');

Route::post('assigntouser', 'AdminsController@assignToUser')->name('assigntouser');

Route::get('addrep', 'AdminsController@addRep')->name('addRep');

Route::post('storerep', 'AdminsController@storeRep')->name('storerep');

Route::delete('users/{id}', [
    'as' => 'delete_user', 
    'uses' => 'AdminsController@deleteUser'
]);

Route::post('/editstatus', 'AdminsController@editStatus')->name('editstatus');

Route::get('editrep/{id}', 'AdminsController@editRep')->name('editrep');

Route::post('/updaterep', 'AdminsController@updateRep')->name('updaterep');

Route::get('allusers', 'AdminsController@allUsers')->name('allusers');

Route::delete('poll/{iduser_poll}', 'AdminsController@deletePoll')->name('destroypoll');

Route::delete('deleterep/{id_rep}', 'AdminsController@deleteRep')->name('deleterep');

Route::Resource('admins', 'AdminsController');

// PICKS


Route::post('/storea', 'PicksController@storeGroupA')->name('storea');
Route::post('/storeb', 'PicksController@storeGroupB')->name('storeb');
Route::post('/storec', 'PicksController@storeGroupC')->name('storec');
Route::post('/stored', 'PicksController@storeGroupD')->name('stored');
Route::post('/storee', 'PicksController@storeGroupE')->name('storee');
Route::post('/storef', 'PicksController@storeGroupF')->name('storef');
Route::post('/storeg', 'PicksController@storeGroupG')->name('storeg');
Route::post('/storeh', 'PicksController@storeGroupH')->name('storeh');
Route::post('/storesecondstage', 'PicksController@storeSecondStage')->name('storesecondstage');

Route::Resource('picks', 'PicksController');

Route::Resource('printpicks', 'Print_PicksController');

Route::Resource('secondstage', 'SecondStageController');




});
