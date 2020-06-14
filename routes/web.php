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

use App\publication;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home',[
    'uses'=>'PublicationController@index',
    'as'=>'home',
    'middleware' =>'auth'
]);

Route::post('/createpublication',[
    'uses'=>'PublicationController@create',
    'as'=>'publication.create',
    'middleware' =>'auth'
]);
Route::get('/publicationDelete/{pub_id}',[
    'uses'=>'PublicationController@Delete',
    'as'=>'publication.Delete',
    'middleware' =>'auth'
]);
Route::get('/editpub','PublicationController@edit')->name('edit');

Route::post('/commentaires/{publication}','CommentaireController@store')->name('commentaires.store');

