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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/friend', 'FriendController@GetFriends')->name('Friends');
Route::get('/profile', 'ProfileController@infoGet')->name('Profile')->middleware('auth');
Route::post('/ChangePhotoProfile', 'ProfileController@ChangePhotoProfile')->name('ChangePhotoProfile');
Route::post('/ChangePhotoCov', 'ProfileController@ChangePhotoCouverture')->name('ChangePhotoCouver');


Route::get('Profile/{name}', 'FriendController@getProfile');






Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});