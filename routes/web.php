<?php

use App\Http\Controllers\GitHubController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas del blog
Route::get('/', 'FrontEndController@home')->name('website');
Route::get('/about', 'FrontEndController@about')->name('website.about');
Route::get('/category/{slug}', 'FrontEndController@category')->name('website.category');
Route::get('/tag/{slug}', 'FrontEndController@tag')->name('website.tag');
Route::get('/post/{slug}', 'FrontEndController@post')->name('website.post');

//PARA LA BUSQUEDA



// Rutas del panel administrativo
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

    //rutas para las demas secciones del sistema
    Route::resource('category', 'CategoryController');
    Route::resource('tag', 'TagController');
    Route::resource('post', 'PostController');
    Route::resource('user', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('user.profile');
    Route::post('/profile', 'UserController@profile_update')->name('user.profile.update');


    Route::get('setting', 'SettingController@edit')->name('setting.index');
    Route::post('setting', 'SettingController@update')->name('setting.update');

});



Route::get('/auth/github', [GitHubController::class, 'gitRedirect']);
Route::get('/auth/github/callback', [GitHubController::class, 'gitCallback']);

