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

// PROFILE
Route::get('/friend', 'FriendController@GetFriends')->name('Friends');
Route::get('/profile', 'ProfileController@infoGet')->name('Profile')->middleware('auth');
Route::get('Profile/{name}', 'FriendController@getProfile');
// PHOTO
Route::post('/ChangePhotoProfile', 'ProfileController@ChangePhotoProfile')->name('ChangePhotoProfile');
Route::post('/ChangePhotoCov', 'ProfileController@ChangePhotoCouverture')->name('ChangePhotoCouver');
// Search
Route::get('/Search', 'ProfileController@Search')->name('Search');

// EDIT
Route::get('/profile/Edit', 'ProfileController@Edit')->name('Edit');
Route::get('/profile/EditProfile', 'ProfileController@UpdateProfile')->name('UpdateProfile');
Route::get('/profile/ChangePass', 'ProfileController@ChangePass')->name('ChangePassword');


//Comm
Route::post('/comment', 'CommentaireController@PubComment')->name('Comment');









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