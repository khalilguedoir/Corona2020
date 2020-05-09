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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// friend part
Route::get('/friends','FriendController@index')->middleware('auth')->name('friends.index');
Route::delete('/friends/destroy/{id}','FriendController@destroy')->name('friends.destroy');
/* Route::resource('friends','FriendController'); ki te5dem bel ressource automatiquement elli fel paramétre
chye7sbou id ta3 friends may idha te5dem inti el route elli fel paramétre bech ye5dhou 3ala ases integer 3adi
nchlh nkoun fedkom bel ma3louma el heyla hedhi*/

