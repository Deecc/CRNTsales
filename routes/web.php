<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth'],], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/cabin/show/{id}', 'CabinController@show');

    Route::get('/cabin/attach/', 'CabinController@attachClient');

    Route::get('/cabin/detach/{id}', 'CabinController@detachClient');

    Route::get('/cabin', 'CabinController@index')->name('web.cabins.index');

    Route::get('/cabin/sale', 'CabinController@sale')->name('web.cabins.sale');

    Route::get('/client', 'ClientController@index')->name('web.clients.index');    

    Route::get('/client/edit/{id}', 'ClientController@edit')->name('web.clients.edit');

    Route::post('/client/{id}', 'ClientController@update')->name('web.clients.update');

    Route::get('/client/delete/{id}', 'ClientController@destroy')->name('web.clients.destroy');

});

// Route::post('/client/createLP', 'ClientController@storeFromLP')->name('web.clients.storeFromLP');

Route::get('/client/create', 'ClientController@create')->name('web.clients.create');

Route::post('/client', 'ClientController@store')->name('web.clients.store');    


