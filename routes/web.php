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
})->name('welcome');

// Route::get('party/create', [
//   'uses' => 'PartyController@createParty',
//   'as' => 'party.create'
// ]);
//
// Route::post('party/newParty', 'PartyController@newParty');

Route::group(['prefix' => 'users'], function () {
  Route::get('register', [
    'uses' => 'UserController@register',
    'as' => 'users.register'
  ]);
});


Route::group(['prefix' => 'party'], function () {
  Route::get('create', [
    'uses' => 'PartyController@createParty',
    'as' => 'party.create'
  ]);

  Route::post('newParty', [
    'uses' => 'PartyController@newParty',
    'as' => 'party.newParty'
  ]);

  Route::get('index', [
    'uses' => 'PartyController@index',
    'as' => 'party.index'
  ]);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
