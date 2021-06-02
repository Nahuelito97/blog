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

Route::get('/home', 'HomeController@index')->name('home');



// Admin Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    Route::resource('category', 'CategoryController');
    //Route::resource('tag', 'TagController');
    //Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');

    // setting
    //Route::get('setting', 'SettingController@edit')->name('setting.index');
    //Route::post('setting', 'SettingController@update')->name('setting.update');

    // Contact message
    //Route::get('/contact', 'ContactController@index')->name('contact.index');
    //Route::get('/contact/show/{id}', 'ContactController@show')->name('contact.show');
    //Route::delete('/contact/delete/{id}', 'ContactController@destroy')->name('contact.destroy');
});
