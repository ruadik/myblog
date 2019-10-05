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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/post/{slug}', 'HomeController@show')->name('post.show');
Route::get('/category/{slug}', 'HomeController@category')->name('category.show');
Route::get('/tag/{slug}', 'HomeController@tag')->name('tag.show');
Route::post('/subs', 'SubsController@store')->name('subs.store');
Route::get('/verify/{token}', 'SubsController@verify');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/about/me', 'HomeController@aboutMe')->name('aboutMe');
    Route::get('/contact', 'HomeController@contact')->name('contact');
    Route::get('/register', 'AuthController@registerForm')->name('register');
    Route::post('/register', 'AuthController@register')->name('register.store');
    Route::get('/login', 'AuthController@loginForm')->name('login');
    Route::post('/login/store', 'AuthController@login')->name('login.store');
});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
    Route::post('/profile', 'ProfileController@update')->name('profile.update');
    Route::post('/comment', 'CommentController@store')->name('comment.store');
});

Route::group(['prefix'=> 'admin', 'namespace'=>'Admin', 'middleware' => 'admin'], function (){
    Route::get('/', 'DashboardController@index')->name('admin.home');
    Route::resource('categories', 'CategoriesController');
    Route::resource('tags', 'TagsController');
    Route::resource('users', 'UsersController');
    Route::get('user/{id}', 'UsersController@isBan')->name('user.isBan');
    Route::resource('posts', 'PostsController');
    Route::get('comments', 'CommentsController@index')->name('comments.index');
    Route::get('comment/{id}', 'CommentsController@update')->name('comment.update');
    Route::delete('comment/{id}', 'CommentsController@destroy')->name('comment.destroy');
    Route::resource('subscriptions', 'SubscriptionsController');
});





