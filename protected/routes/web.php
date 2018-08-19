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

Route::get('/user-profile', 'HomeController@index')->name('user-profie');
Route::resource('/forum', 'ForumController');
Route::resource('/comment', 'CommentController', ['only' => ['update', 'destroy']]);

Route::post('comment/create/{forum}', 'CommentController@addMainComment')->name('forumcomment.store');
Route::post('reply/create/{comment}','CommentController@addReplyComment')->name('replycomment.store');

Route::post('comment/like','LikeController@toggleLike')->name('toggleLike');

Route::get('user-profile/{user}','UserProfileController@index')->name('user-profile');